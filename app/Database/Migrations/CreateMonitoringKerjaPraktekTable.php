<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateMonitoringKerjaPraktekTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'                => ['type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'auto_increment' => true],
            'nama_mahasiswa'    => ['type' => 'VARCHAR', 'constraint' => 100],
            'nim'               => ['type' => 'VARCHAR', 'constraint' => 20],
            'program_studi'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'tempat_magang'     => ['type' => 'VARCHAR', 'constraint' => 100],
            'judul_laporan'     => ['type' => 'VARCHAR', 'constraint' => 255],
            'program_dibuat'    => ['type' => 'TEXT'],
            'dosen_pembimbing'  => ['type' => 'VARCHAR', 'constraint' => 100],
            'created_at'        => ['type' => 'DATETIME', 'null' => true],
            'updated_at'        => ['type' => 'DATETIME', 'null' => true],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('monitoring_kerja_praktek');
    }

    public function down()
    {
        $this->forge->dropTable('monitoring_kerja_praktek');
    }
}
