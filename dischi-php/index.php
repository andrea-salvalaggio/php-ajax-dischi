<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Importing CSS -->
    <link rel="stylesheet" href="../css/style.css">

    <title>PHP Ajax Dischi - Versione 1</title>
</head>
<body>
    
    <header class="d-flex align-items-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="logo-container">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/75/Spotify_icon.png" alt="Spotify Logo">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main class="container my-5">
        <div class="row">
            <div class="col-12">
                <div class="card-container py-3">
                    <div class="card text-white">
                        <img :src="album.poster" class="card-img-top" :alt="album.author">
                        <div class="card-body text-center px-0">
                            <h5 class="text-uppercase fw-bold mb-3"> {{ album.title }} </h5>
                            <p class="card-text m-0"> {{ album.author }} </p>
                            <p class="m-0"> {{ album.year }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
</body>
</html>