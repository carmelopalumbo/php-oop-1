<?php

//set new movies
$db = './data/db.json';
$string = file_get_contents($db);
$json = json_decode($string);
$moviesList = [];

foreach ($json as $movie) {
    $moviesList[$movie->title] = new Movie($movie->title, $movie->year, $movie->genre);
}

//add new film
if (!empty($_GET['title']) && !empty($_GET['year']) && !empty($_GET['genre'])) {
    $newMovie = new Movie($_GET['title'], $_GET['year'], $_GET['genre']);

    $moviesList[$newMovie->title] = $newMovie;

    if (!empty($_GET['poster'])) {
        $moviesList[$newMovie->title]->setPoster($_GET['poster']);
    }

    if (!empty($_GET['wikipedia'])) {
        $moviesList[$newMovie->title]->setwikiPage($_GET['wikipedia']);
    }

    file_put_contents($db, json_encode($moviesList, JSON_PRETTY_PRINT));
}
