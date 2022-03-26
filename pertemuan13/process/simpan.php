<?php
require './koneksi.php';

if (isset($_POST)) {
    $id_dosen = $_POST['id_dosen'] ?? null;
    $nidn  = $_POST['nidn'] ?? null;
    $nama  = $_POST['nama'] ?? null;
    $tgl_lahir  = $_POST['tgl_lahir'] ?? null;
    $gender  = $_POST['gender'] ?? null;

    /**
     * Upload File
     */
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['photo']['name']);
    $imageFileType = strtolower(pathinfo("../" . $target_file, PATHINFO_EXTENSION));
    $checkImage = getimagesize($_FILES['photo']['tmp_name']);
    $uploadOk = 1;

    if ($checkImage !== false) {
        /** Jika file sudah ada dalam folder */
        if (file_exists("../" . $target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        /** Ukuran file tidak lebih dari 50mb */
        if ($_FILES["photo"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        /** Mulai upload file */
        if ($uploadOk === 1) {
            move_uploaded_file($_FILES['photo']['tmp_name'], "../" . $target_file);
        }
    }

    if ($id_dosen === '') {
        $query = $koneksi->query("INSERT INTO dosen VALUES (null, '{$nidn}', '{$nama}', '{$tgl_lahir}', '{$gender}', '{$target_file}')");
    } else {
        $query = $koneksi->query("UPDATE dosen SET nidn = '{$nidn}', nama = '{$nama}', tgl_lahir = '{$tgl_lahir}', gender = '{$gender}', photo = '{$target_file}' WHERE id_dosen = {$id_dosen}");
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
