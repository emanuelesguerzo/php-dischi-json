<?php

// Controllo se il form e' stato inviato correttamente
if ($_POST["titolo"] && $_POST["artista"] && $_POST["genere"] && $_POST["cover"] && $_POST["anno"]) {

    // Recupero i dati del form
    $titolo = $_POST["titolo"];
    $artista = $_POST["artista"];
    $genere = $_POST["genere"];
    $cover = $_POST["cover"];
    $anno = $_POST["anno"];

    // Leggiamo il file dei dischi e li salviamo in una variabile
    $json_text = file_get_contents("./dischi.json");
    $dischi = json_decode($json_text, true);

    // Nuovo album
    $dischi[] = [
        'titolo' => $titolo,
        'artista' => $artista,
        'cover' => $cover,
        'anno' => (int) $anno,
        'genere' => $genere
    ];

    // Converto l'array in JSON
    $json_text = json_encode($dischi);

    // Sovrascrivo vecchi dati con nuovi
    file_put_contents("./dischi.json", $json_text);

    header("Location: ./index.php");
} else {
    header("Location: ./index.php");
}
