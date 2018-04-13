<?php

namespace Model;

class BauntyHunterShip extends AbstractShip
{
    use SettableJediFactorTrait;

    public function isFunctional()
    {
        return true;
    }

    public function getType()
    {
        return 'Baunty Hunter';
    }
}