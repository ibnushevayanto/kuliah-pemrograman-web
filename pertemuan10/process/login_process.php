<?php

$mysqli = new mysqli("localhost", "id18552887_ibnushevayanto", "P@ssw0rdibnushevayanto", "id18552887_db_kuliah_ibnushevayanto");

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $mysqli->query("SELECT * FROM userlogin WHERE username='{$username}' AND password = '{$password}'");

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        session_start();
        $_SESSION['userlogin_id'] = $data['userlogin_id'];
        echo "<script>document.location.href='../index.php'</script>";
    } else {
        echo "Password anda salah";
    }
} else {
    echo "Anda belum mengirimkan parameter";
}
