<?php

namespace Model\Planet;

class SolidPlanet implements PlanetInterface
{
    private $radius;

    private $hexColor;

    private $dayLengthInHours;

    public function __construct($radius, $hexColor, $dayLengthInHours = 24)
    {
        $this->radius = $radius;
        $this->hexColor = $hexColor;
        $this->dayLengthInHours = $dayLengthInHours;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getHexColor()
    {
        return $this->hexColor;
    }

    public function getDateTimeOneDayFromNow()
    {
        // ...
        // just an example of how to use the DateTime object
        // $tomorrow = new DateTime();
        // $tomorrow->modify('+24 hours');
        $date = new \DateTime();

        return $date->modify('+'.$this->dayLengthInHours.' hours');
    }
}