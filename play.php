<?php

class Ship
{
    public $name;

    public $weaponPower = 0;

    public $jediFactor = 0;

    public $strength = 0;

    public function getName()
    {
        return $this->name;
    }
}

$myShip = new Ship();
$myShip->name = 'Millenium Falcon';
echo '<strong>'.'The name of my ship is: '.$myShip->name;
echo '<hr/>';
$myShip->weaponPower = 10;
echo '<strong>'.'Weapon Power of '.$myShip->name.' is :'.$myShip->weaponPower;
echo '<hr/>';


