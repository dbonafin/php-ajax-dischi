<!-- Import the database that contains all the infos -->
<?php include __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Php dischi</title>
</head>
<body>

    <!-- Header area -->
    <header>
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Spotify_logo_without_text.svg/1280px-Spotify_logo_without_text.svg.png" alt="spotify logo">
        </div>
    </header>
    
    <!-- Main area -->
    <main>
        <div class="albums-container">

            <!-- For each album in the database print a card inside the albums-container -->
            <?php foreach($database as $album) { ?>
                <div class="album-card">
                
                    <div class="album-poster">
                        <img src="<?php echo $album['poster']; ?>" alt="<?php echo $album['title'];?>">
                    </div>

                    <div class="album-text">
                        <h3>
                            <?php echo $album['title']; ?>
                        </h3>

                        <h4>
                            <?php echo $album['author']; ?>
                        </h4>
                        <h4>
                            <?php echo $album['year']; ?>
                        </h4>
                    </div>

                </div>
            <?php } ?>

        </div>
    </main>
</body>
</html>