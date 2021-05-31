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
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Calendario LBA</title>
</head>

<body>
    <header>
            <img class="logo" src="logo.png" alt="">
            <h1> LBA </h1>
    </header>
    <div class="background">
    </div>
    <div class="container">
        <div>Ultima giornata:</div>
        <ul>
            <?php
            for ($i = 0; $i < count($giornata); $i++) {
            ?>
                <li>
                    <strong>
                        <?php echo $giornata[$i]["homeTeam"] . " - " . $giornata[$i]["opposingTeam"] ?>
                    </strong>
                    <span class="results">
                        <?php echo $giornata[$i]["homeTeamPoint"] . " - " . $giornata[$i]["opposingTeamPoint"] ?>
                    </span>
                </li>
            <?php
            }
            ?>
        </ul>
    </div>
</body>

</html>