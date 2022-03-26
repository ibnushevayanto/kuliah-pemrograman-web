<?php
function basic($argument)
{
    echo $argument;
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Pertemuan 8 - Latihan 3</title>
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Latihan 3</a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php
                function repeat($text, $num = 10)
                {
                    echo "<ol>\r\n";
                    for ($i = 0; $i < $num; $i++) {
                        echo "<li>$text </li>\r\n";
                    }
                    echo "</ol>";
                }
                // calling repeat with two arguments 
                repeat("I'm the best", 15);
                // calling repeat with just one argument 
                repeat("You're the man");
                ?>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>