<?php require __DIR__ . "/partials/list.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--css-->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>
    <header>
        <div class="container-fluid d-flex justify-content-between">
          <img  src="./img/spotify-logo.png" alt="logo spotify">  
        </div>
    </header>
    <main>
        <div class="container my-4">
            <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
                <?php foreach($database as $album) { ?>
                    <div class="col- my-4">
                        <div class="album text-center mx-auto">
                            <?php echo "<img src='{$album['poster']}' alt='{$album['title']}'>"?>
                            <h4 style='text-transform:uppercase'><?php echo $album["title"] ?> </h4>
                            <div class="subtitle">
                                <div><?php echo $album["author"] ?></div>
                                <div><?php echo $album["year"] ?></div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>
</html>