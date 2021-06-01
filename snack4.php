<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere 
lo stesso numero più di una volta -->
<?php
$arrayRandom = [];
$i = 0;
while (count($arrayRandom) < 15) {
    $numRand = rand(0, 15);
    if (!in_array($numRand, $arrayRandom)) {
        $arrayRandom[] = $numRand;
        $i++;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Array Random </title>
</head>

<body>
    <h1> ARRAY NUMERI RANDOM </h1>
    <ul>
        <?php 
                for($i = 0; $i<count($arrayRandom);$i++){
                    ?>
                    <li><?php echo $arrayRandom[$i] ?></li>
                <?php
                }
                ?>
    </ul>
</body>

</html>