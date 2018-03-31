<?php

class Ship
{
    private $id;

    private $name;

    private $weaponPower = 0;

    private $jediFactor = 0;

    private $strength = 100;

    private $underRepair;

    public function __construct($name)
    {
        $this->name = $name;
        $this->underRepair = mt_rand(1, 100) < 30;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getWeaponPower()
    {
        return $this->weaponPower;
    }

    /**
     * @param int $weaponPower
     */
    public function setWeaponPower($weaponPower)
    {
        $this->weaponPower = $weaponPower;
    }

    /**
     * @return int
     */
    public function getJediFactor()
    {
        return $this->jediFactor;
    }

    /**
     * @param int $jediFactor
     */
    public function setJediFactor($jediFactor)
    {
        $this->jediFactor = $jediFactor;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param int $strength
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    /**
     * @return bool
     */
    public function isFunctional()
    {
        return !$this->underRepair;
    }

    public function getNameAndSpecs($useShortFormat = false)
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

    /**
     * @param $givenShip
     * @return bool
     */
    public function doesGivenShipHasMoreStrength($givenShip)
    {
        return $givenShip->strength > $this->strength;
    }
}