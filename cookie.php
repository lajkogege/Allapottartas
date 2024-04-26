<?php
if (!isset($_COOKIE["latogato"])) {
    $_COOKIE["latogato"] = 1;
    $latogato = 1;
} else if (isset($_COOKIE["felhasznalo"])) {
    $latogato = $_COOKIE["latogato"] + 1;
} else {
    $latogato = $_COOKIE["latogato"];
   
}
setcookie("felhasznalo", "Gege", time() + 5);
setcookie("latogatas", $latogato, time() + 50);
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sütik</title>
</head>

<body>
    <?php
    if (isset($_COOKIE["felhasznalo"])) {
        echo "Üdvözlönk" . $_COOKIE["felhasznalo"] . "!<br>";
        echo "Ez a " . $_COOKIE["latogatas"] . ". látogatásod.";
    } else {
        echo "Üdvözlönk vendég!";
    }
    ?>
</body>

</html>