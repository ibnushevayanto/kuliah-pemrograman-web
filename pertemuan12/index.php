<?php
require './process/koneksi.php';
require './components/header.php';

$dataMahasiswa = $koneksi->query("SELECT * FROM mahasiswa");
?>

<body>
    <div class="container py-2">
        <div class="row">
            <div class="col-12 py-4">
                <a href="tambah.php" class="btn btn-primary">Tambah Data Mahasiswa</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Mahasiswa</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NIM</th>
                                        <th>Nama</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Gender</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $dataMahasiswa->fetch_assoc()) {
                                        echo "
                                            <tr>
                                                <td>{$row['nim']}</td>
                                                <td>{$row['nama']}</td>
                                                <td>{$row['tgl_lahir']}</td>
                                                <td>{$row['gender']}</td>
                                                <td>
                                                    <a class='btn btn-primary' href='ubah.php?id_mahasiswa={$row['id_mahasiswa']}'>Ubah</a>
                                                    <a class='btn btn-danger' href='process/hapus.php?id_mahasiswa={$row['id_mahasiswa']}'>Hapus</a>
                                                </td>
                                            </tr>
                                            ";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>