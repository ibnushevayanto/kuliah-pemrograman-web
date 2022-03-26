<?php
require './koneksi.php';

if (isset($_GET['id_mahasiswa'])) {
    $query = $koneksi->query("DELETE FROM mahasiswa WHERE id_mahasiswa = {$_GET['id_mahasiswa']}");
    if ($query) {
        echo "<script>
            alert('Data Berhasil Dihapus'); 
            document.location.href = '../index.php'; 
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal Dihapus'); 
            document.location.href = '../index.php'; 
        </script>";
    }
}
