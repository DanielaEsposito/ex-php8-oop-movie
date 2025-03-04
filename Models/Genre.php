<?php
class Genre
{
    public $name;
    public $description;


    public function __construct(array $name, $description)
    {
        $this->name = $name;
        $this->description = $description;
    }
    public function getGenreName()
    {
        return implode(",", $this->name);
    }
    public function getGenre()
    {
        return "Genere: " . implode(",", $this->name) . " - " . $this->description;
    }
}
