<?php

require __DIR__ . '/PlanetInterface.php';
require __DIR__ . '/PlanetRenderer.php';
require __DIR__ . '/RandomlyColoredPlanet.php';

use Model\Planet\RandomlyColoredPlanet;
use Service\PlanetRenderer;

spl_autoload_register( function($class){

    if ($class == 'Model\Planet\RandomlyColoredPlanet') {
        require __DIR__ . '/RandomlyColoredPlanet.php';
    }
});

$planet = new RandomlyColoredPlanet('0969F9', 'F96909');

$renderer = new PlanetRenderer();
echo $renderer->render($planet);