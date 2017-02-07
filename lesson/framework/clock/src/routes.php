<?php
// Routes

/*
$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});
*/

$app->get('/', function ($request, $response) {
    $now = date('H:i:s');
    
    return $this->renderer->render($response, 'clock.phtml', ['now' => $now]);
});
