<!-- Creare un array di array. 
Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
Stampare ogni data con i relativi post. -->
<?php
$posts = [
    "30-05-2021" => [
        'Ciao a tutti quuesto è il mio primo tweet',
        'a gemini will like your Tweet and then block you',
        'may the odds be in your favor',
        'Justice is a long road, and we can’t bring back George Floyd. May we each use this moment to continue to deepen our solidarity and our commitment to combating racial injustice, and may his family find peace.'
    ],
    "31-05-2021" => [
        'now you can bless the Tweets in your Fleets with pics of baby pigeons or whatever pics and vids you want really
         rolling out on iOS',
        'do they like you or do they just like your Tweet'
    ],
    "01-06-2021" => [
        'open Twitter 
        close Twitter
        open Twitter 
        close Twitter',
    ]
]
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Social Network </title>
</head>

<body>
    <ul>
        <?php
        $dates = array_keys($posts);
        for ($i = 0; $i < count($posts); $i++) {

        ?>
            <li> <?php echo $dates[$i] ?>
                <ul>
                    <?php
                    for ($j = 0; $j < count($posts[$dates[$i]]); $j++) {
                    ?>
                        <li>
                        <?php
                        echo $posts[$dates[$i]][$j];
                    }
                        ?>
                        </li>
                </ul>
            </li>
        <?php
        }
        ?>
    </ul>
</body>

</html>