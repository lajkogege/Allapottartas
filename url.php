<!DOCTYPE html>
<html lang="HU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL</title>
</head>

<body>
    <?php
    $Szamlalo = 0;
    if (isset($_GET["szamlalo"])) {
        $Szamlalo = $_GET["szamlalo"];
    }
    echo $Szamlalo;
    echo "<br>";
    $Szamlalo++;

    ?>
    <a href="url.php?szamlalo=<?php echo $Szamlalo ?>">Nővel</a>
</body>

</html>