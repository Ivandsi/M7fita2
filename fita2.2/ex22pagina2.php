<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 2 - Exercici 2</title>
</head>

<body>
    <?php

    if (isset($_POST["quantitat"])) {
        $quantitat = $_POST["quantitat"];

        for ($i = 1; $i <= $quantitat; $i++) {
            echo "<a href='ex22pagina3.php?numero=$i'>Comanda $i</a><br>";
        }
    }
    
    ?>
</body>

</html>