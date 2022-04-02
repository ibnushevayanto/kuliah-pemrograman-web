<?php
setcookie("nama_lengkap", "", time() - 3600, '/');
setcookie("jk", "", time() - 3600, '/');
echo "<script>document.location.href='../login.php'</script>";