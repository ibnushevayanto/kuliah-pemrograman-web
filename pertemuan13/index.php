<?php
require './process/koneksi.php';
require './components/header.php';

$dataDosen = $koneksi->query("SELECT * FROM dosen");
?>

<body>
    <div class="container py-2">
        <div class="row">
            <div class="col-12 py-4">
                <a href="tambah.php" class="btn btn-primary">Tambah Data Dosen</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Data Dosen</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>NIDN</th>
                                        <th>
                                            Nama
                                        </th>
                                        <th>Tanggal Lahir</th>
                                        <th>Gender</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while ($row = $dataDosen->fetch_assoc()) {
                                        echo "
                                            <tr>
                                                <td>{$row['nidn']}</td>
                                                <td>
                                                    <img width='50' height='50' class='img-profile rounded-circle' src='" . $row['photo'] . "' />
                                                    {$row['nama']}
                                                </td>
                                                <td>{$row['tgl_lahir']}</td>
                                                <td>{$row['gender']}</td>
                                                <td>
                                                    <a class='btn btn-primary' href='ubah.php?id_dosen={$row['id_dosen']}'>Ubah</a>
                                                    <a class='btn btn-danger' href='process/hapus.php?id_dosen={$row['id_dosen']}'>Hapus</a>
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