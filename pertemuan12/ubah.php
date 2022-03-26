<?php
require './process/koneksi.php';
require './components/header.php';

$data = $koneksi->query("SELECT * FROM mahasiswa WHERE id_mahasiswa = {$_GET['id_mahasiswa']}")->fetch_assoc();
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12 py-4">
                <a href="index.php" class="btn btn-primary">Daftar Mahasiswa</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Ubah Data Mahasiswa</h6>
                    </div>
                    <div class="card-body">
                        <?php require './components/form-mahasiswa.php' ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>