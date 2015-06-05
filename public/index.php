<?php

    error_reporting(E_ALL);
    ini_set('display_errors', 'On');

    require_once __DIR__ . '/../vendor/autoload.php';

    $app = new Silex\Application();
    $app['debug'] = true;

    $twig_loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates');
    $twig = new Twig_Environment($twig_loader);

    $app->get('/', function() use ($app, $twig) {
        return $twig->render('dashboard.twig', array('name' => 'Anton'));
    });

    $app->run();
