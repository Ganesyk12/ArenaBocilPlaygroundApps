<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
    }

    public function get_tables_where($tables, $cari, $where, $iswhere)
    {
        $search = htmlspecialchars($_POST['search']['value']);
        $limit = (int) preg_replace("/\D/", '', $_POST['length']);
        $start = (int) preg_replace("/\D/", '', $_POST['start']);
        $order_field = (int) $_POST['order'][0]['column'];
        $order_ascdesc = $_POST['order'][0]['dir'];
        $order = $_POST['columns'][$order_field]['data'] . " " . $order_ascdesc;

        // Start Cache
        $this->db->start_cache();
        $this->db->from($tables);

        // Apply where conditions
        foreach ($where as $key => $value) {
            $this->db->where($key, $value);
        }

        // Apply additional where if any
        if (!empty($iswhere)) {
            $this->db->where($iswhere);
        }
        $this->db->stop_cache();

        // Count total records without filter
        $sql_count = $this->db->count_all_results();

        // Apply search if there's any search input
        if (!empty($search)) {
            $this->db->group_start();
            foreach ($cari as $column) {
                if ($column == 'occ_date') {
                    $this->db->or_like("CAST($column AS TEXT)", $search);
                } else {
                    $this->db->or_like($column, $search);
                }
            }
            $this->db->group_end();
        }

        // Apply ordering and limit
        $this->db->order_by($order);
        $this->db->limit($limit, $start);
        $sql_data = $this->db->get();
        $data = $sql_data->result_array();

        // Count filtered records
        if (!empty($search)) {
            $this->db->group_start();
            foreach ($cari as $column) {
                if ($column == 'occ_date') {
                    $this->db->or_like("CAST($column AS TEXT)", $search);
                } else {
                    $this->db->or_like($column, $search);
                }
            }
            $this->db->group_end();
            $sql_filter_count = $this->db->count_all_results();
        } else {
            $sql_filter_count = $sql_count;
        }

        // Clear cache
        $this->db->flush_cache();
        $callback = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => $sql_count,
            'recordsFiltered' => $sql_filter_count,
            'data' => $data
        );
        return json_encode($callback);
    }

    public function Get_Data($where, $table)
    {
        $query = $this->db->get_where($table, $where);
        if ($query->num_rows() > 0) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function Max_data($mdate, $key, $table)
    {
        $this->db->select_max($key);
        $this->db->like($key, $mdate);
        $query = $this->db->get($table);
        return $query;
    }
    public function Input_Data($data, $table)
    {
        $this->db->insert($table, $data);
    }
    public function Update_Data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    public function Delete_Data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function ajax_getbyhdrid($common, $key, $table)
    {
        return $this->db->get_where($table, array($common => $key));
    }

    public function insert_batch($table, $data)
    {
        $this->db->insert_batch($table, $data);
        return $this->db->affected_rows();
    }

    // Voucher
    public function get_voucher_discount($voucherCode)
    {
        $this->db->select('discount, status');
        $this->db->where('code', $voucherCode);
        $query = $this->db->get('voucher');
        if ($query->num_rows() > 0) {
            $voucher = $query->row();
            // cek status voucher
            if (isset($voucher->status)) {
                if ($voucher->status == '1') {
                    return ['discount' => $voucher->discount, 'status' => '1'];
                } else {
                    return ['status' => '0', 'error' => 'Voucher Kadaluarsa'];
                }
            } else {
                return ['status' => false, 'error' => 'Status voucher tidak ditemukan'];
            }
        } else {
            return ['status' => false, 'error' => 'Kode voucher salah'];
        }
    }

    // send_email
    public function send_email($to, $name, $subject, $message, $template)
    {
        $config = array(
            'protocol'  => 'smtp',
            'smtp_crypto' => 'ssl',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_user' => '' /*EMAIL*/,
            'smtp_pass' => '' /*SMTP PASS*/,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        );

        // Inisialisasi konfigurasi
        $this->email->initialize($config);

        $data['title'] = $subject;
        $data['name'] = $name;
        $data['message'] = $message;

        if ($template == 'subscription') {
            $email_template = $this->load->view('email/subs_template', $data, TRUE);
        } else if ($template == 'booking') {
            $email_template = $this->load->view('email/booking_template', $data, TRUE);
        } else {
            $email_template = $this->load->view('email/news_template', $data, TRUE);
        }

        // Set pengirim dan penerima
        $this->email->from($config['smtp_user'], 'Arena Bocil');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($email_template);

        if ($this->email->send()) {
            return true;
        } else {
            log_message('error', 'Email error: ' . $this->email->print_debugger());
            return false;
        }
    }

    public function get_user_by_email($email)
    {
        return $this->db->get_where('users', ['email' => $email])->row();
    }
}
