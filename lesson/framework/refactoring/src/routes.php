<?php
// Routes

// $app->get('/[{name}]', function ($request, $response, $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/' route");

//     // Render index view
//     return $this->renderer->render($response, 'index.phtml', $args);
// });

$app->get('/', function ($request, $response) {
    $unseis = ['大吉', '中吉', '小吉', '末吉', '凶'];
    $key = array_rand($unseis);
    $unsei = $unseis[$key];
    
    return $this->renderer->render($response, 'omikuji.phtml', ['unsei' => $unsei]);
});
