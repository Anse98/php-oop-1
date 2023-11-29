<?php

require_once __DIR__ . '/Production.php';

class Movie extends Production
{

    public $profit;
    public $duration;

    function __construct($_title, $_language, $_rating, $_profit, $_duration)
    {
        parent::__construct($_title, $_language, $_rating);
        $this->setProfit($_profit);
        $this->setDuration($_duration);
    }

    /***********************PROFIT************************/

    // set profit
    public function setProfit($_profit)
    {
        if (is_numeric($_profit) && $_profit >= 0) {
            $this->profit = $_profit;
        }
    }

    //get profit
    public function getProfit()
    {
        return $this->profit;
    }

    /***********************DURATION************************/

    // set duration

    public function setDuration($_duration)
    {
        if (is_string($_duration) && $_duration !== '') {
            $this->duration = $_duration;
        }
    }

    // get duration
    public function getDuration()
    {
        return $this->duration;
    }
}
