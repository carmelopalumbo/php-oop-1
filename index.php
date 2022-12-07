<?php

include './models/Movie.php';
include 'getmovies.php';

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

    <!-- font awesome -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.css' integrity='sha512-FA9cIbtlP61W0PRtX36P6CGRy0vZs0C2Uw26Q1cMmj3xwhftftymr0sj8/YeezDnRwL9wtWw8ZwtCiTDXlXGjQ==' crossorigin='anonymous' />

    <!-- modal boostrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
    <title>Movies Card in PHP</title>
</head>

<body>
    <div class="container w-100">
        <div class="row w-100">
            <div class="col">
                <h1 class="py-3">MOVIES LIST</h1>
            </div>
            <div class="col text-end mt-3">
                <i class="fa-solid fa-plus" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"></i>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5 text-black m-auto">ADD A NEW MOVIE</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body w-75 m-auto">
                                <form action="" method="GET">
                                    <input type="text" class="form-control my-4" id="title" placeholder="Title:" name="title">
                                    <input type="text" class="form-control my-4" id="year" placeholder="Year:" name="year">
                                    <input type="text" class="form-control my-4" id="genre" placeholder="Genre:" name="genre">
                                    <input type="text" class="form-control my-4" id="poster" placeholder="Poster:" name="poster">
                                    <input type="text" class="form-control my-4" id="wikipedia" placeholder="Wikipedia:" name="wikipedia">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">AGGIUNGI</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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