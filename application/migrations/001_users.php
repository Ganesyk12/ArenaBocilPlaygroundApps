<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Users extends CI_Migration
{
    protected $tableName  = 'users';

    public function up()
    {
        $this->dbforge->add_field([
            'id_user' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25,
            ],
            'username' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'email' => [
                'type'              => 'VARCHAR',
                'constraint'        => 50,
            ],
            'password' => [
                'type'              => 'VARCHAR',
                'constraint'        => 255
            ],
            'fullname' => [
                'type'              => 'VARCHAR',
                'constraint'        => 100,
            ],
            'role_id' => [
                'type'              => 'VARCHAR',
                'constraint'        => 25
            ],
            'is_active' => [
                'type'              => 'TINYINT',
                'constraint'        => 1,
                'default'           => 1,
            ],
        ]);
        $this->dbforge->add_field("created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP");
        $this->dbforge->add_field("updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP");
        $this->dbforge->add_key('id_user', TRUE);
        $this->dbforge->create_table($this->tableName);

        //Inserting seed rows
        $data = [
            [
                'id_user'   => 'USR0915001',
                'username'  => 'admin',
                'email'     => 'admin@example.com',
                'password'  => password_hash('admin123', PASSWORD_DEFAULT),
                'fullname'  => 'Administrator',
                'role_id'   => 'RL202409001',
                'is_active' => 1
            ],
            [
                'id_user'   => 'USR0915002',
                'username'  => 'publisher',
                'email'     => 'publisher@example.com',
                'password'  => password_hash('publisher123', PASSWORD_DEFAULT),
                'fullname'  => 'Content Publisher',
                'role_id'   => 'RL202409002',
                'is_active' => 1
            ],
        ];

        $this->db->insert_batch($this->tableName, $data);
    }

    public function down()
    {
        $this->dbforge->drop_table($this->tableName);
    }
}
