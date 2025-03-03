<?php
class Movie
{
    public $title;
    public $year;
    public $duration;
    public $desctiption;
    public $reating;


    public function __construct($title, $year, $duration, $desctiption, $reating)
    {
        $this->title = $title;
        $this->year = $year;
        $this->duration = $duration;
        $this->desctiption = $desctiption;
        $this->reating = $reating;
    }
}
