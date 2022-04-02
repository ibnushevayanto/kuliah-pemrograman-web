<?php
include './components/header.php';
if (!isset($_COOKIE['nama_lengkap'])) {
    echo "<script>document.location.href='login.php'</script>";
}
?>

<body>

    <div class="d-flex flex-column justify-content-center align-items-center" style="height: 90vh;">
        <div class="text-center">
            <div class="display-1 fw-bolder text-gray-900">Selamat Datang <?= $_COOKIE['jk'] === 'P' ? 'Bapak'  : 'Ibu' ?> <?= $_COOKIE['nama_lengkap']; ?></div>
            <a href="./process/logout_process.php" class="btn btn-danger">Logout</a>
        </div>
    </div>

    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Ibnu Shevayanto - 191011402556</span>
            </div>
        </div>
    </footer>
</body>

</html>