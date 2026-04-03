<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Newsletter extends CI_Migration
{
    protected $tableName  = 'newsletter';

    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'name' => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
                'null'              => TRUE,
            ],
            'email' => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
            ],
            'message' => [
                'type'              => 'TEXT',
                'null'              => TRUE,
            ],
            'status' => [
                'type'              => 'TINYINT',
                'constraint'        => 1,
                'default'           => 1,
            ],
        ]);
        $this->dbforge->add_field("created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table($this->tableName);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tableName);
    }
}
