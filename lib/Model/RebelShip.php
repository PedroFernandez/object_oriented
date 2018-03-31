<?php

class RebelShip extends Ship
{
    public function getFavoriteJedi()
    {
        $coolJedis = ['Yoda', 'Rei', 'Ben Kenobi'];
        $key = array_rand($coolJedis);

        return $coolJedis[$key];
    }

    public function getType()
    {
        return 'REBEL';
    }

    public function isFunctional()
    {
        return true;
    }
}