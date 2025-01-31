<?php namespace App\Models;

use CodeIgniter\Model;

class MonitoringKPModel extends Model
{
    protected $table = 'monitoring_kerja_praktek';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = [
        'nama_mahasiswa', 'nim', 'program_studi', 
        'tempat_magang', 'judul_laporan', 
        'program_dibuat', 'dosen_pembimbing'
    ];
    protected $useTimestamps = true;
}