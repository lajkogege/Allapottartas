<!DOCTYPE html>
<html lang="HU">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejtett</title>
</head>

<body>
    <?php
    $Szamlalo = 0;
    if (isset($_POST["szamlalo"])) {
        $Szamlalo = $_POST["szamlalo"];
    }
    
    echo "<br>";
    $Szamlalo++;
    echo $Szamlalo;

    ?>
    <form action="" method="post">
        <input type="text" name="szamlalo" value="<?php echo $Szamlalo?>">
        <input type="submit" value="Nővel">
    </form>
</body>

</html>