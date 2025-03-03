<?php
require_once "Models/Genre.php";
require_once "Models/Movie.php";
$genre = new Genre(["romantico"], "film romantico ");
$movies = [
    new Movie("Trainspotting", 1996, "1h 34m", "Trainspotting è un film del 1996 diretto da Danny Boyle, tratto dal romanzo omonimo di Irvine Welsh del 1993.", 5, new Genre(["Giallo"], "Romanzo poliziesco molto diffuso, che tiene desto l'interesse del lettore con la narrazione di misteriosi delitti o vicende impreviste e di un'inchiesta")),
    new Movie("Trainspotting", 1996, "1h 34m", "Trainspotting è un film del 1996 diretto da Danny Boyle, tratto dal romanzo omonimo di Irvine Welsh del 1993.", 2, $genre),
    new Movie("Trainspotting", 1996, "1h 34m", "Trainspotting è un film del 1996 diretto da Danny Boyle, tratto dal romanzo omonimo di Irvine Welsh del 1993.", 5, new Genre(["Giallo"], "Romanzo poliziesco molto diffuso, che tiene desto l'interesse del lettore con la narrazione di misteriosi delitti o vicende impreviste e di un'inchiesta"))
];
