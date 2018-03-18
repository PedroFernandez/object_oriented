<?php

class ShipLoader
{
    public function getShips()
    {
        $shipsData = $this->queryForShips();

        $ships = [];
        foreach ($shipsData as $shipData) {
            $ship = new Ship($shipData['name']);
            $ship->setId($shipData['id']);
            $ship->setStrength($shipData['strength']);
            $ship->setWeaponPower($shipData['weapon_power']);
            $ship->setJediFactor($shipData['jedi_factor']);
            $ships[] = $ship;
        }

        return $ships;
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
}