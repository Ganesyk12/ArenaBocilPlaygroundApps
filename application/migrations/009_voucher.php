<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Voucher extends CI_Migration
{
    protected $tableName  = 'voucher';

    public function up()
    {
        $this->dbforge->add_field([
            'id_voucher' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
            ],
            'code' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
                'unique'            => TRUE,
            ],
            'discount' => [
                'type'              => 'INT',
            ],
            'valid_from' => [
                'type'              => 'DATE',
            ],
            'valid_for' => [
                'type'              => 'DATE',
            ],
            'status' => [
                'type'              => 'VARCHAR',
                'constraint'        => 5,
                'default'           => '1',
            ],
        ]);
        $this->dbforge->add_field("date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_field("updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
        $this->dbforge->add_key('id_voucher', TRUE);
        $this->dbforge->create_table($this->tableName, TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tableName);
    }
}
