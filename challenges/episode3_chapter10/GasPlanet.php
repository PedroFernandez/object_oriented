<?php

class GasPlanet implements PlanetInterface
{
    private $diameter;

    private $mainElement;

    public function __construct($mainElement, $diameter)
    {
        $this->diameter = $diameter;
        $this->mainElement = $mainElement;
    }

    public function getRadius()
    {
        return $this->diameter / 2;
    }

    public function getHexColor()
    {
        // a "fake" map of elements to colors
        switch ($this->mainElement) {
            case 'ammonia':
                return '663300';
            case 'hydrogen':
            case 'helium':
                return 'FFFF66';
            case 'methane':
                return '0066FF';
            default:
                return '464646';
        }
    }
}