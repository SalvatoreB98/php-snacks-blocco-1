<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$giornata = [
    [
        "homeTeam" => "Olimpia Milano",
        "opposingTeam" => "Cantù",
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),
    ],
    [
        "homeTeam" => "Brindisi",
        "opposingTeam" => "Virtus Bologna",
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),
    ],
    [
        "homeTeam" => "Venezia",
        "opposingTeam" => "Dinamo Sassari",
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),
    ],
    [
        "homeTeam" => "Universo Treviso",
        "opposingTeam" => "Trento",
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),
    ],
    [
        "homeTeam" => "Trieste",
        "opposingTeam" => "Brescia",
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),
    ],
    [
        "homeTeam" => "Cremona",
        "opposingTeam" => "Reggiana",
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),
    ],
    [
        "homeTeam" => "Fortitudo Bologna",
        "opposingTeam" => "VL Pesaro",
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario LBA</title>
</head>

<body>
    <h1>Partite 31/05/2021</h1>
    <ul>
        <?php
        for ($i = 0; $i < count($giornata); $i++) {
        ?>
        <li>
        <strong>
                <?php echo $giornata[$i]["homeTeam"] . " - " . $giornata[$i]["opposingTeam"] ?>
            </strong>
            <span> | </span>
            <span>
                <?php echo $giornata[$i]["homeTeamPoint"] . " - " . $giornata[$i]["opposingTeamPoint"] ?>
            </span>
        </li>
        <?php
        }
        ?>
    </ul>
</body>

</html>