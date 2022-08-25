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

    <!-- Prendo il file con i dati dell'array e lo includo -->
    <?php include __DIR__ . '/../db/database.php'?>

    <!-- Header -->
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

    <!-- Main -->
    <main class="container my-5">
        <div class="row">
            <?php foreach ($discList as $disc) { ?>
                <div class="card-container p-3">
                    <div class="card text-white">
                        <img src="<?php echo $disc['poster']?>" alt="<?php echo $disc['author']?>">
                        <div class="text-center">
                            <h5 class="text-uppercase mb-3 mt-3">
                                <?php echo $disc['title']?>
                            </h5>
                            <p class="m-0">
                                <?php echo $disc['author']?>
                            </p>
                            <p class="m-0">
                                <?php echo $disc['year']?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
    
</body>
</html>