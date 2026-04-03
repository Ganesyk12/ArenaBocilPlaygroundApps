<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tickets extends CI_Controller
{
   public function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->helper('date');
      $this->load->helper('file');
      $this->load->database('default');
      $this->load->model('Main_model');
   }

   public function index()
   {
      $data['title'] = 'Ticket & Promo';
      $this->load->view('base/admin/header', $data);
      $this->load->view('base/admin/navbar', $data);
      $this->load->view('base/admin/sidebar', $data);
      $this->load->view('admin/V_ticket', $data);
      $this->load->view('admin/js/ticket-js', $data);
      $this->load->view('base/admin/footer');
   }

   public function view_data_where()
   {
      $tables = "voucher";
      $search = array('id_voucher', 'code', 'discount', 'valid_from', 'valid_for', 'status', 'date_created', 'updated_at');
      $where = array('date_created >' => '2020-01-01');
      $isWhere = null;
      header('Content-Type: application/json');
      echo $this->Main_model->get_tables_where($tables, $search, $where, $isWhere);
   }
}
