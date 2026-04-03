<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Ticket extends CI_Migration
{
    protected $tableName  = 'ticket';

    public function up()
    {
        $this->dbforge->add_field([
            'trxid' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
            ],
            'sku' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
                'unique'            => TRUE,
            ],
            'user_id' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
                'null'              => TRUE,
            ],
            'ticketType' => [
                'type'              => 'VARCHAR',
                'constraint'        => 5,
                'null'              => TRUE,
            ],
            'name' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'no_telp' => [
                'type'              => 'VARCHAR',
                'constraint'        => 15,
                'null'              => TRUE,
            ],
            'email' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
                'null'              => TRUE,
            ],
            'reservation_date' => [
                'type'              => 'DATE',
                'null'              => TRUE,
            ],
            'reservation_time' => [
                'type'              => 'TIME',
                'null'              => TRUE,
            ],
            'ticket_quantity' => [
                'type'              => 'INT',
                'null'              => TRUE,
            ],
            'total' => [
                'type'              => 'INT',
                'null'              => TRUE,
            ],
            'voucher_code' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
                'null'              => TRUE,
            ],
            'discount_price' => [
                'type'              => 'INT',
                'null'              => TRUE,
            ],
            'status' => [
                'type'              => 'VARCHAR',
                'constraint'        => 10,
                'null'              => TRUE,
            ],
        ]);
        $this->dbforge->add_field("created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_field("updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
        $this->dbforge->add_key('trxid', TRUE);
        $this->dbforge->add_key('user_id');
        $this->dbforge->create_table($this->tableName, TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tableName);
    }
}
