<?php

require __DIR__ . '/PlanetRenderer.php';
require __DIR__ . '/PlanetInterface.php';
require __DIR__ . '/GasPlanet.php';

$planet1 = new GasPlanet(GasPlanet::MATERIAL_AMMONIA, 85);
$planet2 = new GasPlanet(GasPlanet::MATERIAL_METHANE, 72);

$renderer = new PlanetRenderer();

?>

    <h1>
        Gas Planets
    </h1>

<?php echo $renderer->render($planet1); ?>
<?php echo $renderer->render($planet2); ?>