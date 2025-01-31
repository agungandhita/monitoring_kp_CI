<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h3><?= $title ?></h3>
            </div>
            <div class="card-body">
                <a href="/monitoring-kp/create" class="btn btn-success mb-3">Tambah Data</a>
                
                <?php if(session()->getFlashdata('success')): ?>
                    <div class="alert alert-success">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                <?php endif; ?>

                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Mahasiswa</th>
                                <th>NIM</th>
                                <th>Program Studi</th>
                                <th>Tempat Magang</th>
                                <th>Judul Laporan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach($kp_data as $kp): ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $kp['nama_mahasiswa'] ?></td>
                                <td><?= $kp['nim'] ?></td>
                                <td><?= $kp['program_studi'] ?></td>
                                <td><?= $kp['tempat_magang'] ?></td>
                                <td><?= $kp['judul_laporan'] ?></td>
                                <td>
                                    <a href="/monitoring-kp/edit/<?= $kp['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="/monitoring-kp/delete/<?= $kp['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data?')">
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>