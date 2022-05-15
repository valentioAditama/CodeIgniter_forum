<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Postingan extends Migration
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
			'id_users'       => [
				'type'           => 'INT',
                'constraint'     => 11,
                ''
			],
			'postingan'      => [
				'type'           => 'TEXT'
			],
            'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
		]);

        // Membuat primary key
		$this->forge->addKey('id', TRUE);

		// Membuat tabel forum
		$this->forge->createTable('postingan', TRUE);
    }

    public function down()
    {
        //
    }
}
