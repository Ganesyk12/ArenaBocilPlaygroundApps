<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Blog extends CI_Migration
{
    protected $tableName  = 'blog';

    public function up()
    {
        $this->dbforge->add_field([
            'id' => [
                'type'              => 'INT',
                'constraint'        => 11,
                'unsigned'          => TRUE,
                'auto_increment'    => TRUE
            ],
            'title' => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
            ],
            'content' => [
                'type'              => 'TEXT',
            ],
            'author_id' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
                'null'              => TRUE,
            ],
            'img_url' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
        ]);
        $this->dbforge->add_field("date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_field("updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('author_id');
        $this->dbforge->create_table($this->tableName, TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tableName);
    }
}
