<?php

spl_autoload_register(function ($class) {

    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
});

use Service\PlanetRenderer;
use Model\Planet\GasPlanet;
use Model\Planet\SolidPlanet;
use Model\Planet\RandomlyColoredPlanet;

$planet1 = new GasPlanet(GasPlanet::MATERIAL_AMMONIA, 49);
$planet2 = new SolidPlanet(27, '353535');
$planet3 = new RandomlyColoredPlanet('0969F9', 'F96909');
$planet4 = new SolidPlanet(45, 'F96909');

$renderer = new PlanetRenderer();
echo $renderer->render($planet1);
echo $renderer->render($planet2);
echo $renderer->render($planet3);
echo $renderer->render($planet4);