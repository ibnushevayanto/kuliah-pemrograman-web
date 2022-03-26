<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$file1 = fopen("absen1.txt", "r");
$file2 = fopen("absen2.txt", "w");
while (!feof($file1)) {
    $isidata = fgets($file1);
    echo "Isi Data <br>";
    fputs($file2, $isidata);
}
fputs($file2, "\nHello");
fclose($file2);
fclose($file1);
?>
</body>
</html>