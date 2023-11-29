<?php

require_once __DIR__ . '/Production.php';

class Serie extends Production
{

    public $season;

    function __construct($_title, $_language, $_rating, $_season)
    {
        parent::__construct($_title, $_language, $_rating);
        $this->season = $_season;
    }

    //set season
    public function setSeason($_season)
    {
        if (is_numeric($_season)) {
            $this->season = $_season;
        }
    }

    // get season
    public function getSeason()
    {
        return $this->season;
    }
}
