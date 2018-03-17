<?php


class BattleResult
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

    public function __construct(Ship $winningShip, Ship $losingShip, $usedJediPowers)
    {
        $this->winningShip = $winningShip;
        $this->losingShip = $losingShip;
        $this->usedJediPowers = $usedJediPowers;
    }

    /**
     * @return mixed
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
     * @return mixed
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
}