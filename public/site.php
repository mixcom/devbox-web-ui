<?php

$site = $app['controllers_factory'];

$site->get('/', function() use ($twig) {
    $data = array(
      'sites' => array(
        array(
          'name' => 'Example website',
          'folder' => 'example-website',
          'link' => 'example-website.192.168.59.103.xip.io',
        ),
      ),
    );

    return $twig->render('sites.twig', $data);
});

return $site;
