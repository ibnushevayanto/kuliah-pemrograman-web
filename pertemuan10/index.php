<?php
session_start();

if (!isset($_SESSION['userlogin_id'])) {
    echo "<script>document.location.href='login.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tugas Pertemuan 10</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">
</head>

<body>
    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 100vh;">
        <div class="text-center">
            <div class="display-1 fw-bolder text-gray-900">Ibnu Shevayanto</div>
            <div class="display-1 fw-bolder text-gray-900">( 191011402556 )</div>
            <div class="display-1 text-gray-900">-</div>
            <div class="display-1 text-gray-900">Tugas Pertemuan 10</div>
            <a href="./process/logout_process.php" class="btn btn-danger">Logout</a>
        </div>
    </div>
</body>

</html>