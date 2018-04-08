<?php

namespace Service;

use Model\RebelShip;
use Model\Ship;

class ShipLoader
{
    /**
     * @var ShipStorageInterface
     */
    private $shipStorage;

    /**
     * @param ShipStorageInterface $shipStorage
     */
    public function __construct(ShipStorageInterface $shipStorage)
    {
        $this->shipStorage = $shipStorage;
    }

    /**
     * @return ShipStorageInterface[]
     */
    public function getShips()
    {
        $shipsData = $this->shipStorage->fetchAllShipsData();

        $ships = [];
        foreach ($shipsData as $shipData) {
            $ship = $this->createShipFromData($shipData);

            $ships[] = $ship;
        }

        return $ships;
    }

    /**
     * @param $id
     * @return null|Ship
     */
    public function findOneById($id)
    {
        $shipArray = $this->shipStorage->fetchSingleShipData($id);

        return $this->createShipFromData($shipArray);
    }

    private function createShipFromData($shipData)
    {
        if ($shipData['team'] == 'rebel')
        {
            $ship = new RebelShip($shipData['name']);
        } else {
            $ship = new Ship($shipData['name']);
            $ship->setJediFactor($shipData['jedi_factor']);
        }

        $ship->setId($shipData['id']);
        $ship->setStrength($shipData['strength']);
        $ship->setWeaponPower($shipData['weapon_power']);

        return $ship;
    }
}