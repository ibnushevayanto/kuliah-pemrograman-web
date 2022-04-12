<?php
require('./components/header.php');
require('./util/koneksi.php');
$product = $koneksi->daftar_product();

?>
<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <a href="tambah.php" class="btn btn-primary my-4">Tambah Data</a>
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
                                    <th>Nama Product</th>
                                    <th>
                                        Harga Normal
                                    </th>
                                    <th>Harga Diskon</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $product->fetch_assoc()) {
                                    echo "
                                                <tr>
                                                    <td>
                                                        <img width='50' height='50' class='img-profile rounded-circle' src='" . $row['thumbnail'] . "' />
                                                        {$row['nama_product']}
                                                    </td>
                                                    <td>{$row['harga_normal']}</td>
                                                    <td>{$row['harga_diskon']}</td>
                                                    <td>
                                                        <a class='btn btn-primary' href='ubah.php?id_product={$row['id_product']}'>Ubah</a>
                                                        <a class='btn btn-danger' href='util/hapus.php?id_product={$row['id_product']}'>Hapus</a>
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

    <?php
    require('./components/footer.php')
    ?>