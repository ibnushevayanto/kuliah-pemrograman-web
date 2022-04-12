<?php
require './koneksi.php';
$koneksi->simpan($_POST['id_product'] ?? '', $_POST['nama_product'] ?? '', $_POST['harga_normal'] ?? '', $_POST['harga_diskon'] ?? '', $_FILES['photo']);
