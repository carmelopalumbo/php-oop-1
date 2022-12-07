<?php

include './models/Movie.php';
include 'movies.php';

//var_dump($moviesList);

$moviesList['Interstellar']->setPoster("https://m.media-amazon.com/images/I/A1JVqNMI7UL._SL1500_.jpg");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Movies Card in PHP</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center py-3">MOVIES LIST</h1>
        <div class="row d-flex justify-content-center w-100">
            <?php foreach ($moviesList as $movie) : ?>
                <div class="col-5 card m-3 text-center pt-2">
                    <img class="m-auto" src="<?php echo $movie->poster ?>" alt="poster">
                    <h3 class="py-3"><?php echo $movie->title ?></h3>
                    <p> <strong>Year: </strong> <?php echo $movie->year ?></p>
                    <p><strong>Genre: </strong> <?php echo $movie->genre ?></p>
                    <p><strong>Wikipedia: </strong> <?php echo $movie->wikiPage ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>