<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 2 - Exercici 2</title>
</head>

<body>
    <?php

    if (isset($_GET["numero"])) {
        $numero = $_GET["numero"];
        echo "<h1>Comanda $numero</h1>";
    }
    ?>
</body>

</html>