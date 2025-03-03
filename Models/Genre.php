<?php
class Genre
{
    public $name;
    public $description;


    public function __construct($name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }
    public function getGenre()
    {
        return "Genere: " . $this->name . " - " . $this->description;
    }
}
