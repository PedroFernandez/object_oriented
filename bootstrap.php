<?php

require __DIR__ . '/lib/Model/AbstractShip.php';
require __DIR__. '/lib/Model/Ship.php';
require __DIR__. '/lib/Model/RebelShip.php';
require __DIR__. '/lib/Model/BattleResult.php';
require __DIR__. '/lib/Model/BrokenShip.php';
require __DIR__. '/lib/Service/BattleManager.php';
require __DIR__. '/lib/Service/ShipLoader.php';
require __DIR__. '/lib/Service/Container.php';
require __DIR__.'/lib/Service/ShipStorageInterface.php';
require __DIR__.'/lib/Service/PdoShipStorage.php';
require __DIR__.'/lib/Service/JsonFileShipStorage.php';

$configuration = [
    'db_dns' => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => 'root'
];