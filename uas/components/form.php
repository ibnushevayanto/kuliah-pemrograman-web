<form class="user" method="post" action="util/simpan.php" enctype="multipart/form-data">
    <input type="hidden" name="id_product" value="<?= $_GET['id_product'] ?? '' ?>">
    <div class="form-group">
        Nama Product
        <input class="form-control" required name="nama_product" value="<?= $data['nama_product'] ?? '' ?>">
    </div>
    <div class="form-group">
        Harga Normal
        <input required class="form-control" type="number" name="harga_normal" value="<?= $data['harga_normal'] ?? '' ?>">
    </div>
    <div class="form-group">
        Harga Diskon
        <input required class="form-control" type="number" name="harga_diskon" value="<?= $data['harga_diskon'] ?? '' ?>">
    </div>
    <div class="form-group">
        <div>Foto</div>
        <input type="file" required name="photo" accept="image/png, image/gif, image/jpeg" />
    </div>
    <div class="text-right">
        <button class="btn btn-danger" type="reset">Reset</button>
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>