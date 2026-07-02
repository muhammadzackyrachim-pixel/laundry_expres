<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransaksiLaundryTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_pelanggan' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'berat_kg' => [
                'type'       => 'DECIMAL',
                'constraint' => '10,2',
            ],
            'total_harga' => [
                'type'       => 'DECIMAL',
                'constraint' => '12,2',
            ],
            'status_cucian' => [
                'type'       => 'ENUM',
                'constraint' => ['Baru', 'Proses', 'Selesai', 'Diambil'],
                'default'    => 'Baru',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        
        $this->forge->addKey('id', true);
        $this->forge->createTable('transaksi_laundry');
    }

    public function down()
    {
        $this->forge->dropTable('transaksi_laundry');
    }
}