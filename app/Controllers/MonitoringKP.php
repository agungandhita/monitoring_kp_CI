<?php namespace App\Controllers;

use App\Models\MonitoringKPModel;

class MonitoringKP extends BaseController
{
    protected $kpModel;

    public function __construct()
    {
        $this->kpModel = new MonitoringKPModel();
    }

    public function index()
    {
        $data = [
            'title' => 'Monitoring Kerja Praktek universitas Billfath',
            'kp_data' => $this->kpModel->findAll()
        ];
        return view('monitoring_kp/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data Kerja Praktek',
            'validation' => \Config\Services::validation()
        ];
        return view('monitoring_kp/create', $data);
    }

    public function store()
    {
        $validationRules = [
            'nama_mahasiswa'    => 'required',
            'nim'               => 'required|is_unique[monitoring_kerja_praktek.nim]',
            'program_studi'     => 'required',
            'tempat_magang'     => 'required',
            'judul_laporan'     => 'required',
            'program_dibuat'    => 'required',
            'dosen_pembimbing'  => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->kpModel->save([
            'nama_mahasiswa'    => $this->request->getPost('nama_mahasiswa'),
            'nim'               => $this->request->getPost('nim'),
            'program_studi'     => $this->request->getPost('program_studi'),
            'tempat_magang'     => $this->request->getPost('tempat_magang'),
            'judul_laporan'     => $this->request->getPost('judul_laporan'),
            'program_dibuat'    => $this->request->getPost('program_dibuat'),
            'dosen_pembimbing'  => $this->request->getPost('dosen_pembimbing')
        ]);

        return redirect()->to('/monitoring-kp')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Kerja Praktek',
            'kp' => $this->kpModel->find($id),
            'validation' => \Config\Services::validation()
        ];
        return view('monitoring_kp/edit', $data);
    }

    public function update($id)
    {
        $validationRules = [
            'nama_mahasiswa'    => 'required',
            'nim'               => 'required',
            'program_studi'     => 'required',
            'tempat_magang'     => 'required',
            'judul_laporan'     => 'required',
            'program_dibuat'    => 'required',
            'dosen_pembimbing'  => 'required'
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $this->kpModel->update($id, [
            'nama_mahasiswa'    => $this->request->getPost('nama_mahasiswa'),
            'nim'               => $this->request->getPost('nim'),
            'program_studi'     => $this->request->getPost('program_studi'),
            'tempat_magang'     => $this->request->getPost('tempat_magang'),
            'judul_laporan'     => $this->request->getPost('judul_laporan'),
            'program_dibuat'    => $this->request->getPost('program_dibuat'),
            'dosen_pembimbing'  => $this->request->getPost('dosen_pembimbing')
        ]);

        return redirect()->to('/monitoring-kp')->with('success', 'Data Berhasil Diupdate');
    }

    public function delete($id)
    {
        $this->kpModel->delete($id);
        return redirect()->to('/monitoring-kp')->with('success', 'Data Berhasil Dihapus');
    }
}