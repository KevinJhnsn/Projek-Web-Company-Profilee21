<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreatePortfolioTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'title'       => ['type' => 'VARCHAR', 'constraint' => 150],
            'description' => ['type' => 'TEXT'],
            'image'       => ['type' => 'VARCHAR', 'constraint' => 255, 'null' => true], // Simpan nama file gambar
            'created_at'  => ['type' => 'DATETIME', 'null' => true],
            'updated_at'  => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('portfolio');
    }

    public function down()
    {
        $this->forge->dropTable('portfolio');
    }
}
