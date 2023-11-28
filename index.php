<?php

class Production
{

    public $title;
    public $language;
    public $rating;

    public function getFilm()
    {
        echo 'Il titolo del film è ' . $this->title . ' con lingua ' . $this->language . ' e con voto di ' . $this->rating . ' su 5' . '<br>';
    }
}

//primo film
$film_1 = new Production();

$film_1->title = 'Una notte da leoni';

$film_1->language = 'Us';

$film_1->rating = 4;


//secondo film
$film_2 = new Production();

$film_2->title = 'Estate';

$film_2->language = 'It';

$film_2->rating = 3;


$film_1->getFilm();

$film_2->getFilm();
