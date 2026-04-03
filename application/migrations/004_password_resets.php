<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Password_resets extends CI_Migration
{
    protected $tableName  = 'password_resets';

    public function up()
    {
        $this->dbforge->add_field([
            'email' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'token' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255,
            ],
        ]);
        $this->dbforge->add_field("created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_key('email');
        $this->dbforge->create_table($this->tableName);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tableName);
    }
}
