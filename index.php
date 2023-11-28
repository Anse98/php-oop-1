<?php

class Production
{

    public $title;
    public $language;
    public $rating;

    function __construct($_title, $_language, $_rating)
    {
        $this->setTitle($_title);

        $this->setLanguage($_language);

        $this->setRating($_rating);
    }


    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->title = $title;
        } else {
            $this->title = 'Nome del film non trovato';
        }
    }

    public function setLanguage($language)
    {
        if (is_string($language)) {
            $this->language = $language;
        } else {
            $this->language = 'Lingua del film non trovata';
        }
    }

    public function setRating($rating)
    {
        if (is_numeric($rating) && $rating > 0) {
            $this->rating = intval($rating);
        }
    }

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
                <?php foreach ($films as $film) { ?>
                    <ul class="movie">
                        <h2><?php $film->getTitle() ?></h2>
                        <li>Lingua : <?php $film->getLanguage() ?></li>
                        <li>Voto : <?php $film->getRating() ?> su 5</li>
                    </ul>
                <?php } ?>
            </div>

        </section>
    </main>
</body>

</html>