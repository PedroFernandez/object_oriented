<?php

class Container
{
    public function __construct($configuration)
    {
        $this->configuration = $configuration;
    }

    public function getPdo()
    {
        $pdo = new PDO(
            $this->configuration['db_dns'],
            $this->configuration['db_user'],
            $this->configuration['db_pass']
        );

        return $pdo;
    }
}