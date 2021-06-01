<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. 
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$giornata = [
    [
        "homeTeam" => [
            "name" => "Olimpia Milano",
            "logoTeam" => 'olimpia.png'
        ],
        "opposingTeam" => [
            "name" => "Cantù",
            "logoTeam" => 'cantu.png',
        ],
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),

    ],
    [
        "homeTeam" => [
            "name" => "Brindisi",
            "logoTeam" => 'brindisi.png'
        ],
        "opposingTeam" => [
            "name" => "Virtus Bologna",
            "logoTeam" => 'virtus.png'
        ],
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),

    ],
    [
        "homeTeam" => [
            "name" => "Venezia",
            "logoTeam" => 'venezia.png'
        ],
        "opposingTeam" => [
            "name" => "Dinamo Sassari",
            "logoTeam" => 'dinamo.png'
        ],
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),

    ],
    [
        "homeTeam" => [
            "name" => "Universo Treviso",
            "logoTeam" => 'treviso.png'
        ],
        "opposingTeam" => [
            "name" =>  "Trento",
            "logoTeam" => 'trento.png'
        ],
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),

    ],
    [
        "homeTeam" => [
            "name" => "Trieste",
            "logoTeam" => 'trieste.png'
        ],
        "opposingTeam" => [
            "name" => "Brescia",
            "logoTeam" => 'brescia.png'
        ],
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),

    ],
    [
        "homeTeam" => [
            "name" => "Cremona",
            "logoTeam" => 'cremona.png'
        ],
        "opposingTeam" => [
            "name" => "Reggiana",
            "logoTeam" => 'reggiana.png'
        ],
        "homeTeamPoint" => rand(10, 80),
        "opposingTeamPoint" => rand(10, 80),

    ],
    [
        "homeTeam" => [
            "name" => "Fortitudo Bologna",
            "logoTeam" => 'fortitudo.png'
        ],
        "opposingTeam" => [
            "name" => "VL Pesaro",
            "logoTeam" => 'pesaro.png'
        ],
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
                        <span class="team">
                            <span class="team-logo"> <img src="<?php echo "imgs/" . $giornata[$i]["homeTeam"]["logoTeam"]  ?>" alt=""> </span>
                            <?php echo $giornata[$i]["homeTeam"]["name"] ?>
                        </span>
                        -
                        <span class="team">
                            <span class="team-logo"> <img src="<?php echo "imgs/" . $giornata[$i]["opposingTeam"]["logoTeam"]  ?>" alt=""> </span>
                            <?php echo $giornata[$i]["opposingTeam"]["name"] ?>
                        </span>

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