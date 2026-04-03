<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Transaction extends CI_Migration
{
    protected $tableName  = 'transaction';

    public function up()
    {
        $this->dbforge->add_field([
            'id_transaction'    => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
            ],
            'transaction_date'  => [
                'type'              => 'DATETIME',
                'constraint'        => 25,
            ],
            'product'   => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
                'null'              => TRUE,
            ],
            'qty'       => [
                'type'              => 'INT',
                'null'              => TRUE,
            ],
            'price'     => [
                'type'              => 'INT',
                'null'              => TRUE,
            ],
            'payment'   => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
                'null'              => TRUE,
            ],
            'client'    => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
                'null'              => TRUE,
            ],
            'user_id'      => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
                'null'              => TRUE,
            ]
        ]);
        $this->dbforge->add_key('id_transaction', TRUE);
        $this->dbforge->add_key('user_id');
        $this->dbforge->create_table($this->tableName);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tableName);
    }
}