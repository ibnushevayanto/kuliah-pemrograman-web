<?php
require('./components/header.php');
require('./util/koneksi.php');

$product = $koneksi->daftar_product();
?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <h5>List Product</h5>
</nav>

<div class="container-fluid">

    <div class="row">
        <?php
        while ($row = $product->fetch_assoc()) {
            echo "
            <div class='col-4'>
            <div class='card shadow mb-4'>
                <div class='card-header py-3 d-flex flex-row align-items-center justify-content-between'>
                    <h6 class='m-0 font-weight-bold text-primary'>" . $row['nama_product'] . "</h6>
                </div>
                <div class='card-body'>
                    <img src='" . $row['thumbnail'] . "' alt='Strawberry' class='image-thumbnail' style='width: 100%;'>
                    <h4 class='mt-3 text-center'> <s>Rp. " . $row['harga_normal'] . "</s> </h4>
                    <h4 class='mt-3 text-center text-danger'>Rp. " . $row['harga_diskon'] . "</h4>
                </div>
            </div>
        </div>
            ";
        ?>
        <?php } ?>
    </div>

</div>

<?php
require('./components/footer.php')
?>