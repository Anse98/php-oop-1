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


    //set title
    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->title = $title;
        } else {
            $this->title = 'Nome del film non trovato';
        }
    }

    // set language
    public function setLanguage($language)
    {
        if (is_string($language)) {
            $this->language = $language;
        } else {
            $this->language = 'Lingua del film non trovata';
        }
    }

    // set rating
    public function setRating($rating)
    {
        if (is_numeric($rating) && $rating > 0 && $rating <= 5) {
            $this->rating = intval($rating);
        }
    }

    // get title
    public function getTitle()
    {
        echo $this->title;
    }

    // get language
    public function getLanguage()
    {
        echo $this->language;
    }

    // get rating
    public function getRating()
    {
        echo $this->rating;
    }
}
