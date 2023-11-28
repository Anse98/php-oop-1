<?php

class Production
{

    public $title;
    public $language;
    public $rating;

    public function getTitle()
    {
        echo $this->title;
    }

    public function getLanguage()
    {
        echo $this->language;
    }

    public function getRating()
    {
        echo $this->rating;
    }



    function __construct($_title, $_language, $_rating)
    {
        $this->title = $_title;

        $this->language = $_language;

        $this->rating = $_rating;
    }
}

//primo film
$film_1 = new Production('Una notte da Leoni', 'US', 4);

//secondo film
$film_2 = new Production('Estate', 'IT', 3);

//terzo film
$film_3 = new Production('Voglia di napoli', 'IT', 1);

//array di film
$films = [$film_1, $film_2, $film_3];

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
            <h1>Film</h1>
        </div>
    </header>
    <main>
        <section class="movies">

            <div class="movies-container">
                <?php foreach ($films as $film) {
                ?>
                    <ul class="movie">
                        <h2><?php $film->getTitle() ?></h2>
                        <li>Lingua : <?php $film->getLanguage() ?></p>
                        <li>Voto : <?php $film->getRating() ?> su 5</p>
                    </ul>
                <?php }
                ?>
            </div>

        </section>
    </main>
</body>

</html>