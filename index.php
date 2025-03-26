<?php
require_once "./functions.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Custom CSS -->
     <link rel="stylesheet" href="./css/styles.css">
    <title>PHP Music</title>
</head>
<body>

    <header>

    </header>

    <div class="add-song-btn">

    </div>

    <ul>
        <?php foreach($dischi as $disco): ?> 
            
            <li>
                <div class="img-container">
                    <img src="<?= $disco["cover"] ?>" alt="Cover dell'album <?= $disco["titolo"] ?>">
                </div>
                <div>
                    <h1><?= $disco["titolo"] ?></h1>
                    <p><?= $disco["artista"] ?></p>
                    <p><?= $disco["anno"] ?></p>
                    <p><?= $disco["genere"] ?></p>
                    <p></p>
                </div>
            </li>

        <?php endforeach; ?>
    </ul>
    
</body>
</html>