<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Event extends CI_Migration
{
    protected $tableName  = 'event';

    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'sku' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
                'unique'            => TRUE,
            ],
            'title' => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
            ],
            'content' => [
                'type'              => 'TEXT',
            ],
            't_c' => [
                'type'              => 'TEXT',
            ],
            'event_start' => [
                'type'              => 'DATE',
            ],
            'event_end' => [
                'type'              => 'DATE',
            ],
            'img_url' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'status' => [
                'type'              => 'TINYINT',
                'constraint'        => 1,
                'default'           => 1,
            ],
        ]);
        $this->dbforge->add_field("date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_field("updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table($this->tableName, TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tableName);
    }
}
