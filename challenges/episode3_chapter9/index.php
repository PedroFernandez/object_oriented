<?php

require 'AbstractPlanet.php';
require 'SolidPlanet.php';
require 'GasPlanet.php';
require 'PlanetRenderer.php';

$planets = array(
    new RandomlyColoredPlanet(10, 'CC66FF'),
    new RandomlyColoredPlanet(50, '00FF99'),
    new GasPlanet('ammonia', 100),
    new GasPlanet('methane', 150),
);

$renderer = new PlanetRenderer();

foreach ($planets as $planet) {
    echo $renderer->render($planet);
}