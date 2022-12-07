<?php

//set new movies
$string = file_get_contents('./data/db.json');
$json = json_decode($string);
$moviesList = [];

foreach ($json as $movie) {
    $moviesList[$movie->title] = new Movie($movie->title, $movie->year, $movie->genre);
}
