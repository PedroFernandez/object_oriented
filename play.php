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

    /**
     * @param Ship $someShip
     */
    public function printShipSummary($someShip)
    {
        echo '<strong>'.'The name of my ship is: '. $someShip->name;
        echo '<hr/>';
        $someShip->weaponPower = 10;
        echo '<strong>'.'Weapon Power of '.$someShip->name.' is :'.$someShip->weaponPower;
        echo '<hr/>';
        echo $someShip->getNameAndSpecs(true);
        echo '<hr/>';
        echo $someShip->getNameAndSpecs(false);
        echo '<hr/>';
    }

    public function doesGivenShipHasMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }
}

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


