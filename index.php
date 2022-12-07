<?php

include './class/Movie.php';

$movie1 = new Movie("Avatar", 2009, "Adventure");
$movie2 = new Movie("Interstellar", 2014, "Sci-Fi");
$movie3 = new Movie("The Truman Show", 1998, "Drama");
$movie4 = new Movie("The Revenant", 2015, "Adventure");
$movie5 = new Movie("Green Book", 2018, "Comedy");

$moviesList = [$movie1, $movie2, $movie3, $movie4, $movie5];

var_dump($moviesList);
