<?php

spl_autoload_register(function ($class) {
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
});

use Model\Planet\GasPlanet;
use Service\PlanetRenderer;


$renderer = new PlanetRenderer();


$planets = [
    new GasPlanet(GasPlanet::MATERIAL_AMMONIA, 47),
    new GasPlanet(GasPlanet::MATERIAL_HELIUM, -56),
    new GasPlanet(GasPlanet::MATERIAL_HYDROGEN, 63),
];
foreach ($planets as $planet) {
    try {
        echo $renderer->render($planet);
    } catch (\Exception $e) {
        echo 'Planet cannot be rendered.';
    }
}