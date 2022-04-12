<?php

// "localhost", "id18552887_ibnushevayanto", "P@ssw0rdibnushevayanto", "id18552887_db_kuliah_ibnushevayanto"
// "localhost", "root", "", "db_kuliah_ibnushevayanto"

class Koneksi
{
    protected $server;
    protected $username;
    protected $password;
    protected $database;

    function __construct($server, $username, $password, $database)
    {
        $this->server = $server;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    protected function connect()
    {
        $mysqli = new mysqli($this->server, $this->username, $this->password, $this->database);
        if ($mysqli->connect_errno) {
            echo "Failed to connect to MySQL: " . $mysqli->connect_error;
            return false;
        }

        return $mysqli;
    }

    public function simpan($id_product, $nama_product, $harga_normal, $harga_diskon, $thumbnail)
    {
        $koneksi = $this->connect();
        $target_file = $this->upload($thumbnail);

        if ($target_file) {
            if ($id_product === '') {
                $query = $koneksi->query("INSERT INTO product VALUES (null, '{$nama_product}', '{$harga_normal}', '{$harga_diskon}', '{$target_file}')");
            } else {
                $query = $koneksi->query("UPDATE product SET nama_product = '{$nama_product}', harga_normal = '{$harga_normal}', harga_diskon = '{$harga_diskon}', thumbnail = '{$target_file}' WHERE id_product = {$id_product}");
            }

            if ($query) {
                echo "<script>
                    alert('Data Berhasil Disimpan'); 
                    document.location.href = '../daftar_product.php'; 
                </script>";
            } else {
                echo "<script>
                    alert('Data Gagal Disimpan'); 
                    document.location.href = '../daftar_product.php'; 
                </script>";
            }
        } else {
            echo "<script>
                alert('Data Gagal Disimpan'); 
                document.location.href = '../daftar_product.php'; 
            </script>";
        }
    }

    public function upload($photo)
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($photo['name']);
        // $imageFileType = strtolower(pathinfo("../" . $target_file, PATHINFO_EXTENSION));
        $checkImage = getimagesize($photo['tmp_name']);
        $uploadOk = 1;

        if ($checkImage !== false) {
            /** Mulai upload file */
            if ($uploadOk === 1) {
                move_uploaded_file($photo['tmp_name'], "../" . $target_file);
                return $target_file;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }

    public function daftar_product()
    {
        $koneksi = $this->connect();
        return $koneksi->query("SELECT * FROM product");
    }
    public function detail_product($id_product)
    {
        $koneksi = $this->connect();
        return $koneksi->query("SELECT * FROM product WHERE id_product = {$id_product} ")->fetch_assoc();
    }
    public function hapus_product($id_product)
    {
        $koneksi = $this->connect();
        $query = $koneksi->query("DELETE FROM product WHERE id_product = {$id_product}");
        if ($query) {
            echo "<script>
            alert('Data Berhasil Dihapus'); 
            document.location.href = '../daftar_product.php'; 
        </script>";
        } else {
            echo "<script>
            alert('Data Gagal Dihapus'); 
            document.location.href = '../daftar_product.php'; 
        </script>";
        }
    }
}

$koneksi = new Koneksi("sql308.epizy.com", "epiz_31483043", "O57ZUsFYLdDAQ", "epiz_31483043_db_ibnu_shevayanto");
