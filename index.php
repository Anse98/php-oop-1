<?php

class Production
{

    public $title;
    public $language;
    public $rating;

    public function getFilmInformations()
    {
        echo 'Il titolo del film è ' . $this->title . ' con lingua ' . $this->language . ' e con voto di ' . $this->rating . ' su 5' . '<br>';
    }

    function __construct($title, $language, $rating)
    {
        $this->title = $title;

        $this->language = $language;

        $this->rating = $rating;
    }
}

//primo film
$film_1 = new Production('Una notte da Leoni', 'US', 4);

//secondo film
$film_2 = new Production('Estate', 'IT', 3);


$film_1->getFilmInformations();

$film_2->getFilmInformations();
