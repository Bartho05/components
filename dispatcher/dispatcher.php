<?php

function dispatcher($rota){
    echo "5. Dispatcher decidiu qual controller deve executar.<br>";

    $rotas = [
        '/' => 'usuarioController',
        '/usuarios' => 'usuarioController',
        '/pets' => 'petsController'
    ];

    if (isset($rotas[$rota])) {
        $rotas[$rota]();
        return;
    }

    http_response_code(404);
    echo "Rota não encontrada.<br>";
}