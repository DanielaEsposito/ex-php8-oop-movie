<?php
class Movie
{
    public $title;
    public $year;
    public $duration;
    public $description;
    public $rating;
    public $genre;
    use PosterTrait;
    public function __construct($title, $year, $duration, $description, $rating, Genre $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->duration = $duration;
        $this->description = $description;
        $this->rating = $rating;
        $this->genre = $genre;
    }
    public function getMovie()
    {
        return "<br> Nome: $this->title  <br> Anno di pubblicazione: $this->year <br> Durata del film: $this->duration <br> Descrizione: $this->description <br> Voto: $this->rating <br> Genere: $this->genre";
    }
}
