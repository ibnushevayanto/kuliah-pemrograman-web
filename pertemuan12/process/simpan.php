<?php
require './koneksi.php';

if (isset($_POST)) {
    $id_mahasiswa = $_POST['id_mahasiswa'] ?? null;
    $nim  = $_POST['nim'] ?? null;
    $nama  = $_POST['nama'] ?? null;
    $tgl_lahir  = $_POST['tgl_lahir'] ?? null;
    $gender  = $_POST['gender'] ?? null;

    if ($id_mahasiswa === '') {
        $query = $koneksi->query("INSERT INTO mahasiswa VALUES (null, '{$nim}', '{$nama}', '{$tgl_lahir}', '{$gender}')");
    } else {
        $query = $koneksi->query("UPDATE mahasiswa SET nim = '{$nim}', nama = '{$nama}', tgl_lahir = '{$tgl_lahir}', gender = '{$gender}' WHERE id_mahasiswa = {$id_mahasiswa}");
    }

    if ($query) {
        echo "<script>
            alert('Data Berhasil Disimpan'); 
            document.location.href = '../index.php'; 
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Disimpan'); 
            document.location.href = '../tambah.php'; 
        </script>";
    }
}
