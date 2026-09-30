<?php

function petsController(){
    echo "9. Controller recebeu a requisição.<br>";
    $pets = petsService();
    echo "11. Controller recebeu os dados do Service.<br>";
    echo "Pets encontrados:<br>";
    foreach ($pets as $pets) {
        echo "- " . $pets . "<br>";
    }
}
