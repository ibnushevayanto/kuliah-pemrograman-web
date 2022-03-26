<?php
require './header.php'
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
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Data Mahasiswa</h6>
                    </div>
                    <div class="card-body">
                        <form class="user" method="post" action="process/tambah.php">
                            <div class="form-group">
                                NIM
                                <input class="form-control" required name="nim">
                            </div>
                            <div class="form-group">
                                Nama
                                <input required class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                Tgl Lahir
                                <input required class="form-control" type="date" name="tgl_lahir">
                            </div>
                            <div class="form-group">
                                <div>Gender</div>
                                <input type="radio" id="pria-radio" name="gender" value="P">
                                <label for="pria-radio">Pria</label>
                                <input type="radio" id="wanita-radio" name="gender" value="W">
                                <label for="wanita-radio">Wanita</label>
                            </div>
                            <div class="text-right">
                                <button class="btn btn-danger">Reset</button>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>