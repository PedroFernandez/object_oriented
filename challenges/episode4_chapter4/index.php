<?php

require __DIR__ . '/PlanetRenderer.php';
require __DIR__ . '/PlanetInterface.php';
require __DIR__ . '/RandomlyColoredPlanet.php';

$planet = new Model\Planet\RandomlyColoredPlanet('0969F9', 'F96909');

$renderer = new PlanetRenderer();
echo $renderer->render($planet);