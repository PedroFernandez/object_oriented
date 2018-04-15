<?php

spl_autoload_register(function ($class) {
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
});

use Model\Planet\SolidPlanet;

$planet = new SolidPlanet(100, 'ff00ff', 12);
$tomorrow = $planet->getDateTimeOneDayFromNow();

?>

<h3>
    1 day from now:
    <?php echo $tomorrow->format('Y-m-d H:i:s'); ?>
</h3>