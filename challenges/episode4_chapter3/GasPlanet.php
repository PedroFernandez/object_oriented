<?php

class GasPlanet implements PlanetInterface
{
    private $diameter;

    private $mainElement;

    const MATERIAL_AMMONIA = 'ammonia';

    const MATERIAL_HYDROGEN = 'hydrogen';

    const MATERIAL_HELIUM = 'helium';

    const MATERIAL_METHANE = 'methane';

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
            case self::MATERIAL_AMMONIA:
                return '663300';
            case self::MATERIAL_HYDROGEN:
            case self::MATERIAL_HELIUM:
                return 'FFFF66';
            case self::MATERIAL_METHANE:
                return '0066FF';
            default:
                return '464646';
        }
    }

    public static function getAllElements()
    {
        return [
            new GasPlanet(self::MATERIAL_AMMONIA, 80),
            new GasPlanet(self::MATERIAL_HYDROGEN, 80),
            new GasPlanet(self::MATERIAL_HELIUM, 80),
            new GasPlanet(self::MATERIAL_METHANE, 80)
            ];
    }
}