<?php

/*
 * Taco Haus Routing File
 * (c) 2022 Jon Belelieu <@jbelelieu>
 */

$router = new \Bramus\Router\Router();

$router->setBasePath('/');

$router->before('GET', '/.*', function () {
    header('X-Powered-By: taco.haus');
});

$router->set404(function () {
    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
    echo '404, route not found!';
    exit;
});

// Taco Stands (registration)
$router->get('/stand', function () {
    echo 'GET /stand';
    exit;
});

$router->post('/stand', function () {
    echo 'POST /stand';
    exit;
});

$router->get('/stands', function () {
    echo 'GET /stands';
    exit;
});

$router->get('/stand/{standId}', function ($standId) {
    echo 'GET /stand/' . $standId;
    exit;
});

// Tacos
$router->get('/taco', function () {
    echo 'GET /taco';
    exit;
});

$router->post('/taco', function () {
    echo 'POST /taco';
    exit;
});

$router->get('/tacos', function () {
    echo 'GET /tacos';
    exit;
});

$router->get('/view/{tacoId}', function (string $tacoId) {
    $file = './../assets/images/' . $tacoId . '.png';
    if (file_exists($file)) {
        header('Content-type: text/html');
        echo '<img src="/' . $file . '" alt="We got your Taco right here bud!" />';
        exit;
    }

    echo "We just couldn't find that taco... maybe you care to make one?";
    exit;
});

// Accounts management
$router->get('/profile', function () {
    echo 'GET /profile';
    exit;
});

$router->put('/profile', function () {
    echo 'POST /profile';
    exit;
});

$router->get('/profile/password', function () {
    echo 'GET /profile/password';
    exit;
});

$router->put('/profile/password', function () {
    echo 'POST /profile/password';
    exit;
});

$router->run();
