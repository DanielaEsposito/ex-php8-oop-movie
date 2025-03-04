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

    <title>Movie</title>
</head>

<body>
    <header>
        <div class="container">
            <h1 class="Movie-title"> Movie </h1>
        </div>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-4">
                <?php
                //definizione dell'url per i film con il metodo setPoster del trait poster
                $movies[0]->setPoster("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROl-dp49ZMCEy52_pvbpAfuWifAF2IS18gUQ&s");
                $movies[1]->setPoster("https://pad.mymovies.it/filmclub/2015/04/052/locandina.jpg");
                $movies[2]->setPoster("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcROl-dp49ZMCEy52_pvbpAfuWifAF2IS18gUQ&s");


                foreach ($movies as $movie) {

                    echo '<div class="col">';
                    echo '<div class="card" style="width: 18rem;">';
                    echo $movie->displayPoster();
                    echo '<div class="card-body">';
                    echo "<h5 class='card-title'>{$movie->title}</h5>";
                    echo "<h6 class='card-subtitle mb-2 text-body-secondary'>{$movie->year}</h6>";
                    echo " <h6 class='card-text'>{$movie->duration}</h6>";
                    echo " <h6 class='card-text'>{$movie->rating}</h6>";
                    echo " <h6 class='card-text'>" . $movie->genre->getGenre() . "</h6>";
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