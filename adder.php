<?php

if(isset($_GET['titolo']) && isset($_GET['descrizione']) && isset($_GET['completato'])) {
    //aggiungo una task
    //? prendiamo i dati
    $data = file_get_contents('./db/todolist_newTask.json');

    //? decodifichioamo da json a php
    $data = json_decode($data, true);

    //? manipoliamo i dati aggiungendo per elementi
    $data[] = [
        "titolo" => $_GET['titolo'], 
        "descrizione" => $_GET['descrizione'], 
        "completato" => $_GET['completato']
    ];

    //? codifico da php a json
    $jsonData = json_encode($data);

    //? scrivo e salvo in file il nuovo json
    file_put_contents("./db/animali.json", $jsonData);
}

?>