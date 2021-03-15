<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Events extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'name'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'category'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'description' => [
				'type'       => 'TEXT'

			],
			'date' => [
				'type' => 'DATE'
			],
			'admission'       => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'link' => [
				'type' => 'TEXT'
			],
			'image' => [
				'type'       => 'VARCHAR',
				'constraint' => '255',
			],
			'created_at' => [
				'type'		=> 'DATETIME',
				'null'		=> TRUE
			],
			'updated_at' => [
				'type'		=> 'DATETIME',
				'null'		=> TRUE
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('events');
	}

	public function down()
	{
		//
		$this->forge->dropTable('events');
	}
}
