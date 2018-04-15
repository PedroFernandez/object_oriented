<?php

spl_autoload_register(function ($class) {
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
});

use Model\Planet\GasPlanet;
use Model\Planet\SolidPlanet;
use Service\PlanetRenderer;


$renderer = new PlanetRenderer();

$planets = [
    new GasPlanet(GasPlanet::MATERIAL_AMMONIA, 47),
    new GasPlanet(GasPlanet::MATERIAL_HELIUM, -56),
    new GasPlanet(GasPlanet::MATERIAL_HYDROGEN, 63),
    new SolidPlanet(39, ''),
];
foreach ($planets as $planet) {
    try {
        echo $renderer->render($planet);
    } catch (\Exception\InvalidRadiusException $e) {
        echo 'Planet cannot be rendered';
    } catch (\Exception\MissingHexException $e) {
        echo 'Planet has no color';
    }
}