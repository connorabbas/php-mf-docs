<?php
// Valid Routes for site

$routes->get('/', function(){
    return App::view('home', [
        'pageTitle' => 'Home',
        'pageDesc' => 'Welcome to the php mini framework!',
    ]);
});

$routes->get('/documentation', [DocumentationController::class, 'index']);

$routes->checkRoute();
