<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/Serie.php';

// movies
$movie_1 = new Movie('Una notte da leoni', 'EN', 4, 10000000, '110 min');
$movie_2 = new Movie('Die Hard', 'EN', 3, 150000, '180 min');
$movie_3 = new Movie('Il grande Gatsby', 'EN', 5, 30000000, '220 min');
$movie_4 = new Movie('Avatar', 'EN', 4, 90000000, '240 min');
$movie_5 = new Movie('Saw', 'EN', 3, 40000000, '120 min');

// series
$serie_1 = new Serie('La casa di carta', 'ES', 4, 5);
$serie_2 = new Serie('Breaking Bad', 'EN', 5, 6);
$serie_3 = new Serie('Elite', 'ES', 3, 4);
$serie_4 = new Serie('Spongebob', 'EN', 5, 18);
$serie_5 = new Serie('The Big Bang Theory', 'EN', 4, 10);

// array di movies e series
$movies_and_series = [$movie_1, $movie_2, $movie_3, $movie_4, $movie_5, $serie_1, $serie_2, $serie_3, $serie_4, $serie_5];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film con oop</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <div class="title">
            <h1>Film & Serie</h1>
        </div>
    </header>
    <main>
        <section class="movies">

            <div class="movies-container">
                <?php foreach ($movies_and_series as $item) { ?>
                    <ul class="movie-series">
                        <h2><?php $item->getTitle() ?></h2>
                        <li>Lingua : <?php $item->getLanguage() ?></li>
                        <li>Voto : <?php $item->getRating() ?> su 5</li>
                    </ul>
                <?php } ?>
            </div>

        </section>
    </main>
</body>

</html>