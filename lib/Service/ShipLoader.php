<?php

namespace Service;

use Model\RebelShip;
use Model\Ship;
use Model\ShipCollection;

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
     * @return ShipCollection
     */
    public function getShips()
    {
        try{
            $shipsData = $this->shipStorage->fetchAllShipsData();
        } catch(\PDOException $e) {
            trigger_error('DataBase Exception!'.$e->getMessage());
            return [];
        }

        $ships = [];
        foreach ($shipsData as $shipData) {
            $ship = $this->createShipFromData($shipData);

            $ships[] = $ship;
        }

        return new ShipCollection($ships);
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