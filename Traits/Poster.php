
<?php

trait PosterTrait
{
    private $posterUrl;

    // Imposta l'URL del poster
    public function setPoster($posterUrl)
    {
        $this->posterUrl = $posterUrl;
    }

    // Ottieni l'URL del poster
    public function getPoster()
    {
        return $this->posterUrl;
    }

    // Visualizza il poster
    public function displayPoster()
    {
        echo "<img src={$this->posterUrl} class=card-img-top alt=Poster di {$this->title}  />";
    }
}
