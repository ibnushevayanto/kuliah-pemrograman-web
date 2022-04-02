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

    public function login($email, $password)
    {
        if (!is_null($email) && !is_null($password)) {
            $mysqli = $this->connect();
            $result = $mysqli->query("SELECT * FROM userlogin WHERE email='{$email}' AND password = '{$password}'");
            if ($result->num_rows > 0) {
                $data = $result->fetch_assoc();
                setcookie("nama_lengkap", $data['nama_lengkap'], time() + 3600, "/");
                setcookie("jk", $data['gender'], time() + 3600, "/");

                echo "<script>document.location.href='../index.php'</script>";
            } else {
                echo "<script>alert('Password anda salah'); document.location.href='../login.php';</script>";
            }
        } else {
            echo "Parameter tidak valid";
        }
    }

    public function register($email, $password, $nama_lengkap, $gender)
    {
        if (!is_null($email) && !is_null($email) && !is_null($email) && !is_null($email)) {
            $mysqli = $this->connect();
            $result = $mysqli->query("INSERT INTO userlogin VALUES(null, '{$email}', '{$password}', '{$nama_lengkap}', '{$gender}')");
            if ($result) {
                $this->login($email, $password);
            } else {
                echo "<script>alert('Register gagal dilakukan'); document.location.href='../register.php';</script>";
            }
        } else {
            echo "Parameter tidak valid";
        }
    }
}

$koneksi = new Koneksi("localhost", "id18552887_ibnushevayanto", "P@ssw0rdibnushevayanto", "id18552887_db_kuliah_ibnushevayanto");
