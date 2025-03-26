<?php
require_once "./functions.php";
$dischi = getDisks();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=4.0">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/styles.css">
    <title>PHP Music</title>
</head>

<body>

    <!-- Header -->
    <header>
        <img class="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/54/2024_Spotify_logo_without_text.svg/1920px-2024_Spotify_logo_without_text.svg.png?20240618225721" alt="">
    </header>

    <h2>Aggiungi un nuovo album!</h2>

    <!-- Form -->
    <form action="server.php" method="POST">

        <div class="form-wrapper">

            <!-- Form Left -->
            <div class="form-left">
                <label for="titolo">Titolo dell'album</label>
                <input type="text" name="titolo" id="titolo" placeholder="Titolo album" required>

                <label for="artista">Nome dell'artista</label>
                <input type="text" name="artista" id="artista" placeholder="Nome artista" required>

                <label for="genere">Genere dell'album</label>
                <input type="text" name="genere" id="genere" placeholder="Genere album" required>
            </div>

            <!-- Form Right -->
            <div class="form-right">

                <label for="cover">Cover dell'album</label>
                <input type="text" name="cover" id="cover" placeholder="Cover album" required>

                <label for="anno">Anno di rilascio dell'album</label>
                <input type="text" name="anno" id="anno" placeholder="Anno album" required>

                <!-- Submit Button -->
                <button class="add-song-btn" type="submit">Aggiungi +</button>
            </div>
        </div>
    </form>

    <!-- Container -->
    <div class="container">

        <h2>Lista brani</h2>

        <!-- Album List -->
        <ul>
            <?php foreach ($dischi as $disco): ?>

                <li>
                    <div class="img-container">
                        <img src="<?= $disco["cover"] ?>" alt="Cover dell'album <?= $disco["titolo"] ?>">
                    </div>
                    <div class="card-text">
                        <h3><?= $disco["titolo"] ?></h3>
                        <p class="artist"><?= $disco["artista"] ?></p>
                        <p class="year"><?= $disco["anno"] ?></p>
                        <p><?= $disco["genere"] ?></p>
                    </div>
                </li>

            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>