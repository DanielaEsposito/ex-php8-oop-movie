<?php
require_once "Models/Genre.php";
require_once "Models/Movie.php";
$genre = new Genre(["romantico"], "film romantico ");
$movies = [

    new Movie("Trainspotting", 1996, "1h 34m", "Trainspotting è un film del 1996 diretto da Danny Boyle, tratto dal romanzo omonimo di Irvine Welsh del 1993.", 5, new Genre(["Giallo, Romantico "], "Romanzo poliziesco molto diffuso, che tiene desto l'interesse del lettore con la narrazione di misteriosi delitti o vicende impreviste e di un'inchiesta")),

    new Movie("Io prima di Te", 2016, "1h 34m", "Tratta dall'omonimo romanzo di Jojo Moyes, la pellicola è interpretata da Emilia Clarke, Sam Claflin, Jenna Coleman e Charles Dance.", 5, $genre),

    new Movie("Trainspotting", 1996, "1h 34m", "Trainspotting è un film del 1996 diretto da Danny Boyle, tratto dal romanzo omonimo di Irvine Welsh del 1993.", 5, new Genre(["Giallo"], "Romanzo poliziesco molto diffuso, che tiene desto l'interesse del lettore con la narrazione di misteriosi delitti o vicende impreviste e di un'inchiesta"))
];
