<?php
require './koneksi.php';

if (isset($_POST['nim'])) {
    $nim  = $_POST['nim'];
    $nama  = $_POST['nama'];
    $tgl_lahir  = $_POST['tgl_lahir'];
    $gender  = $_POST['gender'];

    $query = $koneksi->query("INSERT INTO mahasiswa VALUES (null, '$nim', '$nama', '$tgl_lahir', '$gender')");

    if ($query) {
        echo "<script>
            alert('Data Berhasil Ditambah'); 
            document.location.href = '../index.php'; 
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Ditambah'); 
            document.location.href = '../tambah.php'; 
        </script>";
    }
}
