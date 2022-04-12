<?php
require('./components/header.php');
?>
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
    <h5>Tambah Product</h5>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Tambah Product</h6>
                </div>
                <div class="card-body">
                    <?php require('./components/form.php') ?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require('./components/footer.php')
?>