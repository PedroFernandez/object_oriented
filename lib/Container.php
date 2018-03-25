<?php

class Container
{
    private $pdo;

    private $shipLoader;

    private $battleManager;

    public function __construct($configuration)
    {
        $this->configuration = $configuration;
    }

    public function getPdo()
    {
        if ($this->pdo == null) {
            $this->pdo = new PDO(
                $this->configuration['db_dns'],
                $this->configuration['db_user'],
                $this->configuration['db_pass']
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->pdo;
    }

    public function getShipLoader()
    {
        if ($this->shipLoader === null) {
            $this->shipLoader = new ShipLoader($this->getPdo());
        }

        return $this->shipLoader;
    }

    public function getBattleManager()
    {
        if ($this->battleManager === null) {
            $this->battleManager = new BattleManager();
        }

        return $this->battleManager;
    }
}