<!-- ## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, 
che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
$isLogged = false;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accedi</title>
</head>

<body>
    <?php
    if (!$isLogged) {
        var_dump($isLogged);
    ?>
        <form method="GET">
            <label for="name"> NAME <input type="text" name="name" id="name"></label>
            <label for="mail"> MAIL <input type="text" name="mail" id="mail"></label>
            <label for="mail"> AGE <input type="number" name="age" id="age"></label>
            <button type="submit"> INVIA </button>
            <?php
            if (key_exists("name", $_GET) && key_exists("mail", $_GET) && key_exists("age", $_GET)) {
                $name = $_GET["name"];
                $mail = $_GET["mail"];
                $age = $_GET["age"];
                $result = strlen($name) > 3 && strpos($mail, "@") && strpos($mail, ".");
                var_dump($result);
                if (strlen($name) > 3 && strpos($mail, "@") && strpos($mail, ".")) {
                    $isLogged = true;
            ?>
                    <h2>Accesso riuscito</h2>
                <?php
                } else {
                ?>
                    <h2>Accesso negato</h2>
        <?php
                }
            }
        }
        ?>



        </form>
</body>

</html>