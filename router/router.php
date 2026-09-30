<?php

function normalizarRota($uri){
    $uri = parse_url($uri, PHP_URL_PATH) ?: '/';

    $basePath = '/components';
    if (strpos($uri, $basePath) === 0) {
        $uri = substr($uri, strlen($basePath));
    }

    $rota = '/' . trim($uri, '/');

    if ($rota === '//') {
        $rota = '/';
    }

    return strtolower($rota);
}

function router(){
    echo "2. Router está analisando a URL.<br>";

    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    $rota = normalizarRota($uri);

    middleware($rota);
}
