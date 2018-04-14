<?php

require __DIR__ . '/PlanetRenderer.php';
require __DIR__ . '/PlanetInterface.php';
require __DIR__ . '/GasPlanet.php';


$planets = GasPlanet::getAllElements();

foreach ($planets as $planet) {
    $renderer = new PlanetRenderer();
    echo $renderer->render($planet);
}

