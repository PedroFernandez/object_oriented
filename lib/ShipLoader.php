<?php

class ShipLoader
{
    /**
     * @var $pdo PDO
     */
    private $pdo;

    /**
     * @return Ship[]
     */
    public function getShips()
    {
        $shipsData = $this->queryForShips();

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
        $pdo = $this->getPdo();
        $statement = $pdo->prepare('SELECT * from ship WHERE id = :id');
        $statement->execute(array('id' => $id));
        $shipArray = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$shipArray) {
            return null;
        }

        return $this->createShipFromData($shipArray);
    }

    /**
     * @return array
     */
    protected function queryForShips(): array
    {
        $pdo = new PDO('mysql:host=localhost;dbname=oo_battle', 'root', 'root');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->prepare('SELECT * from ship');
        $statement->execute();
        $shipsArray = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $shipsArray;
    }

    private function createShipFromData($shipData)
    {
        $ship = new Ship($shipData['name']);
        $ship->setId($shipData['id']);
        $ship->setStrength($shipData['strength']);
        $ship->setWeaponPower($shipData['weapon_power']);
        $ship->setJediFactor($shipData['jedi_factor']);

        return $ship;
    }

    /**
     * @return PDO
     */
    private function getPdo()
    {
        if (is_null($this->pdo)) {
            $pdo = new PDO('mysql:host=localhost;dbname=oo_battle', 'root', 'root');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        $this->pdo = $pdo;

        return $this->pdo;
    }
}