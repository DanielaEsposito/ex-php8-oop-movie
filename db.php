<?php
require_once "Models/Genre.php";
require_once "Models/Movie.php";
$genreRomantic = new Genre(["Romantico"], "film romantico ");
$genreAction = new Genre(["Azione"], "film d'azione");
$genreMusical = new Genre(["Musical"], "film incentrato su musiche");
$movies = [

    new Movie("Trainspotting", 1996, "1h 34m", "Trainspotting è un film del 1996 diretto da Danny Boyle, tratto dal romanzo omonimo di Irvine Welsh del 1993.", 5, new Genre(["Giallo, Romantico "], "Genere poliziesco")),

    new Movie("Io prima di Te", 2016, "1h 34m", "Tratta dall'omonimo romanzo di Jojo Moyes, la pellicola è interpretata da Emilia Clarke, Sam Claflin, Jenna Coleman e Charles Dance.", 5, $genreRomantic),


    new Movie("Il Cavaliere Oscuro ", 2008, "2h 34m", "Il cavaliere oscuro (The Dark Knight) è un film del 2008 co-scritto, diretto, co-ideato e co-prodotto da Christopher Nolan.", 5, $genreAction),
    new Movie("Il Pianista sull'oceano ", 1998, "2h 50m", "La leggenda del pianista sull'oceano è un film del 1998 scritto e diretto da Giuseppe Tornatore, adattamento del monologo teatrale Novecento di Alessandro Baricco.", 5, $genreMusical),

];
