<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fita 2 - Exercici 1</title>
</head>

<body>
    <form method="POST">
        <label for="userName">User: </label>
        <input type="text" name="userName" id="userName" placeholder="Pepe123">

        <label for="userPassword">Password: </label>
        <input type="password" name="userPassword" id="userPassword">

        <input type="submit" value="Submit">
    </form>

    <?php

    $userDict = ["Pepe" => "pepe1234", "Pepa" => "pepa1234"];

    if (isset($_POST["userName"]) && isset($_POST["userPassword"])) {
        $userName = $_POST["userName"];
        $userPassword = $_POST["userPassword"];

        if (array_key_exists($userName, $userDict)) {

            if ($userDict[$userName] == $userPassword) {
                echo "Login correcte";
            } else {
                echo "Login incorrecte";
            }
        } else {
            echo "Login incorrecte";
        }
    } else {
        echo "Login incorrecte";
    }
    ?>
</body>

</html>