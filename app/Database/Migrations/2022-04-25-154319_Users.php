<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'fullname'       => [
				'type'           => 'VARCHAR',
                'constraint'     => 225,
			],
			'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'username' => [
				'type'           => 'VARCHAR',
                'constraint'     => 255,
			],
			'password' => [
				'type'           => 'VARCHAR',
                'constraint'     => 255,
			],
            'image_profile' => [
				'type'           => 'VARCHAR',
                'constraint'     => 255,
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

        // Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel forum
		$this->forge->createTable('users', TRUE);

    }

    public function down()
    {
        //
    }
}