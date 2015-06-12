<?php

$site = $app['controllers_factory'];

$site->get('/', function() use ($twig) {

    $siteFinder = new \Devbox\WebUI\SiteFinder(new \Symfony\Component\Finder\Finder());
    $sites = $siteFinder->find(__DIR__ . '/../../sites');

    $data = array(
      'sites' => $sites,
    );

    return $twig->render('sites.twig', $data);
});

return $site;
