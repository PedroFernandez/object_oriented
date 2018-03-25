<?php

class Container
{
    private $pdo;

    public function __construct($configuration)
    {
        $this->configuration = $configuration;
    }

    public function getPdo()
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                $this->configuration['db_dns'],
                $this->configuration['db_user'],
                $this->configuration['db_pass']
            );
        }

        return $this->pdo;
    }
}