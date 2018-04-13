<?php

namespace Model;

class BattleResult implements \ArrayAccess
{
    /**
     * @var Ship
     */
    private $winningShip;

    /**
     * @var Ship
     */
    private $losingShip;

    /**
     * @var bool
     */
    private $usedJediPowers;

    public function __construct($usedJediPowers, AbstractShip $winningShip = null, AbstractShip $losingShip = null)
    {
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
        $this->usedJediPowers = $usedJediPowers;
    }

    /**
     * @return Ship|null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @param mixed $winningShip
     */
    public function setWinningShip($winningShip)
    {
        $this->winningShip = $winningShip;
    }

    /**
     * @return Ship|null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }

    /**
     * @param mixed $losingShip
     */
    public function setLosingShip($losingShip)
    {
        $this->losingShip = $losingShip;
    }

    /**
     * @return mixed
     */
    public function wereJediPowersUsed()
    {
        return $this->usedJediPowers;
    }

    /**
     * @param mixed $usedJediPowers
     */
    public function setUsedJediPowers($usedJediPowers)
    {
        $this->usedJediPowers = $usedJediPowers;
    }

    /**
     * Was there a winner? Or did everybody die :(
     *
     * @return bool
     */
    public function isThereAWinner()
    {
        return $this->getWinningShip() !== null;
    }

    public function offsetExists($offset)
    {
        return property_exists($this, $offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
}