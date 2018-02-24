<?php

class Ship
{
    public $name;

    public $weaponPower = 0;

    public $jediFactor = 0;

    public $strength = 100;

    public function getName()
    {
        return $this->name;
    }

    public function getNameAndSpecs($useShortFormat)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s: %s/%s/%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        } else {
            return sprintf(
                '%s: w:%s, j:%s, s:%s',
                $this->name,
                $this->weaponPower,
                $this->jediFactor,
                $this->strength
            );
        }
    }

    public function doesGivenShipHasMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }
}

$myShip = new Ship();
$myShip->name = 'Millenium Falcon';
echo '<strong>'.'The name of my ship is: '.$myShip->name;
echo '<hr/>';
$myShip->weaponPower = 10;
echo '<strong>'.'Weapon Power of '.$myShip->name.' is :'.$myShip->weaponPower;
echo '<hr/>';
echo $myShip->getNameAndSpecs(true);
echo '<hr/>';
echo $myShip->getNameAndSpecs(false);
echo '<hr/>';

$badShip = new Ship();
$badShip->name = 'Dar Vader Ship';
$badShip->strength = 50;

if ($myShip->doesGivenShipHasMoreStrength($badShip)) {
    echo $badShip->name . ' has more strength than other ship.';
} else {
    echo $myShip->name . ' has more strength than other ship';
}


