<form class="user" method="post" action="process/simpan.php" enctype="multipart/form-data">
    <input type="hidden" name="id_dosen" value="<?= $_GET['id_dosen'] ?? '' ?>">
    <div class="form-group">
        NIDN
        <input class="form-control" required name="nidn" value="<?= $data['nidn'] ?? '' ?>">
    </div>
    <div class="form-group">
        Nama
        <input required class="form-control" name="nama" value="<?= $data['nama'] ?? '' ?>">
    </div>
    <div class="form-group">
        Tgl Lahir
        <input required class="form-control" type="date" name="tgl_lahir" value="<?= $data['tgl_lahir'] ?? '' ?>">
    </div>
    <div class="form-group">
        <div>Gender</div>
        <input type="radio" <?= isset($data['gender']) ? $data['gender'] === 'P' ? 'checked' : '' : '' ?> id="pria-radio" name="gender" value="P" required>
        <label for="pria-radio">Pria</label>
        <input type="radio" id="wanita-radio" required <?= isset($data['gender']) ? $data['gender'] === 'W' ? 'checked' : '' : '' ?> name="gender" value="W">
        <label for="wanita-radio">Wanita</label>
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