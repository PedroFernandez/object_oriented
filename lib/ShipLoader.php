<?php

class ShipLoader
{
    /**
     * @var $pdo PDO
     */
    private $pdo;

    /**
     * @var string
     */
    private $dns;

    /**
     * @var string
     */
    private $dbUser;

    /**
     * @var string
     */
    private $dbPass;

    /**
     * ShipLoader constructor.
     * @param $dns
     * @param $dbUser
     * @param $dbPass
     */
    public function __construct($dns, $dbUser, $dbPass)
    {
        $this->dns = $dns;
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
    }

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
            $this->pdo = new PDO($this->dns, $this->dbUser, $this->dbPass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->pdo;
    }
}