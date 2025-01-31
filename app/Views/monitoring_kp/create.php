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
                <?php if(session()->has('errors')): ?>
                    <div class="alert alert-danger">
                        <?php foreach(session('errors') as $error): ?>
                            <p><?= $error ?></p>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

                <form action="/monitoring-kp/store" method="post">
                    <?= csrf_field() ?>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nama_mahasiswa" class="form-label">Nama Mahasiswa</label>
                            <input type="text" class="form-control" id="nama_mahasiswa" name="nama_mahasiswa" value="<?= old('nama_mahasiswa') ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nim" class="form-label">NIM</label>
                            <input type="text" class="form-control" id="nim" name="nim" value="<?= old('nim') ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="program_studi" class="form-label">Program Studi</label>
                            <input type="text" class="form-control" id="program_studi" name="program_studi" value="<?= old('program_studi') ?>" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="tempat_magang" class="form-label">Tempat Magang</label>
                            <input type="text" class="form-control" id="tempat_magang" name="tempat_magang" value="<?= old('tempat_magang') ?>" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="judul_laporan" class="form-label">Judul Laporan</label>
                        <input type="text" class="form-control" id="judul_laporan" name="judul_laporan" value="<?= old('judul_laporan') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="program_dibuat" class="form-label">Program yang Dibuat</label>
                        <textarea class="form-control" id="program_dibuat" name="program_dibuat" rows="3" required><?= old('program_dibuat') ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="dosen_pembimbing" class="form-label">Dosen Pembimbing</label>
                        <input type="text" class="form-control" id="dosen_pembimbing" name="dosen_pembimbing" value="<?= old('dosen_pembimbing') ?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan Data</button>
                    <a href="/monitoring-kp" class="btn btn-secondary">Kembali</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>