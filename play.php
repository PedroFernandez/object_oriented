<?php

require __DIR__ .'/lib/Ship.php';

$myShip = new Ship();
$myShip->name = 'Millenium Falcon';
$myShip->printShipSummary($myShip);

echo '<hr/>';

$badShip = new Ship();
$badShip->name = 'Dar Vader Ship';
$badShip->strength = 50;

if ($myShip->doesGivenShipHasMoreStrength($badShip)) {
    echo $badShip->name . ' has more strength than other ship.';
} else {
    echo $myShip->name . ' has more strength than other ship';
}


