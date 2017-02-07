<?php
// Routes

use App\Model\Omikuji;

// $app->get('/[{name}]', function ($request, $response, $args) {
//     // Sample log message
//     $this->logger->info("Slim-Skeleton '/' route");

//     // Render index view
//     return $this->renderer->render($response, 'index.phtml', $args);
// });

$app->get('/', function ($request, $response) {
    $omikuji = new Omikuji;
    $unsei = $omikuji->shuffle();
    
    return $this->renderer->render($response, 'omikuji.phtml', ['unsei' => $unsei]);
});
