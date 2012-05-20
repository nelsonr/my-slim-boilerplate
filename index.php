<?php
require 'Slim/Slim.php';
require 'Views/TwigView.php';

$app = new Slim(array(
    'view' => new TwigView(),
	'templates.path' => 'templates'
));

$app->get('/', function() use($app) {
	$app->render('index.html');
});

$app->run();
