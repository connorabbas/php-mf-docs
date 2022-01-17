<?php
// Valid Routes for site

$routes->get('/', function(){
    return App::view('home', [
        'pageTitle' => 'Home',
        'pageDesc' => 'Welcome to the php mini framework!',
    ]);
});

$routes->get('/documentation', function(){
    return App::view('documentation', [
        'pageTitle' => 'Docs',
        'pageDesc' => 'Documentation for the php mini framework',
    ]);
});

$routes->checkRoute();
