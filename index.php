<?php
//traits
require_once "Traits/Poster.php";
//models
require_once "Models/Genre.php";
require_once "Models/Movie.php";
//db
require_once "db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--CSS-->
    <link href="index.css" rel="stylesheet" type="text/css">
    <title>Movie</title>
</head>

<body>
    <header>
        <div class="container">
            <h1 class="Movie-title text-center my-4"> Movie </h1>

        </div>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-4">
                <?php
                //definizione dell'url per i film con il metodo setPoster del trait poster
                $movies[0]->setPoster("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROl-dp49ZMCEy52_pvbpAfuWifAF2IS18gUQ&s");
                $movies[1]->setPoster("https://pad.mymovies.it/filmclub/2015/04/052/locandina.jpg");
                $movies[2]->setPoster("https://m.media-amazon.com/images/S/pv-target-images/f987a548c667c9d5821bc88fd9fd4aff956122203f645ca33d47f0f6e3182f05.jpg");
                $movies[3]->setPoster("https://www.today.it/~shared/images/tv/locandine/la-leggenda-del-pianista-sull_oceano-10y5.jpg");


                foreach ($movies as $movie) {

                    echo '<div class="col">';
                    echo '<div class="card h-100" style="width: 18rem;">';
                    echo '<div class="img-container">';
                    echo $movie->displayPoster();
                    echo '</div>';
                    echo '<div class="card-body">';
                    echo "<h5 class='card-title'>{$movie->title}</h5>";
                    echo "<h6 class='card-subtitle mb-2 text-body-secondary'>{$movie->year}</h6>";
                    echo " <h6 class='card-text'>{$movie->duration}</h6>";
                    echo " <h6 class='card-text'>{$movie->rating} &star;</h6>";
                    echo " <h6 class='card-text'>" . $movie->genre->getGenreName() . "</h6>";
                    echo " <p class='card-text'>{$movie->description}</p>";
                    echo "</div>";
                    echo "</div>";
                    echo '</div>';
                }
                ?>


            </div>
        </div>
    </main>
</body>

</html>