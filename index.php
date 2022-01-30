<?php
require_once './classes/user.php';

$movies = [
    new Movie("Titanic", 1997, "James Cameron", "Leonardo Di Caplrio" ),
    new Movie("La ricerca della felicità", 2006, "Gabriele Muccino", "Will Smith" ),
    new Movie("Il miglio verde", 1999, "Frank Darabont", "Tom Hanks" ),
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1>Filmografia</H1>
    <div>
        <?php foreach($movies as $movie) { ?>
            <div>
                <h2><?php echo "{$movie->title}" ?></h2>
                <ul>
                    <li><?php echo "Anno di uscista: {$movie->year}" ?></li>
                    <li><?php echo "Regista: {$movie->regist}" ?></li>
                    <li><?php echo "Attore protagonista: {$movie->actor}" ?></li>
                </ul>
            </div>
        <?php } ?>
    </div>
</body>
</html>