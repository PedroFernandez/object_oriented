<?php

require __DIR__. '/lib/Ship.php';
require __DIR__. '/lib/BattleManager.php';
require __DIR__. '/lib/ShipLoader.php';
require __DIR__. '/lib/BattleResult.php';
require __DIR__. '/lib/Container.php';

$configuration = [
    'db_dns' => 'mysql:host=localhost;dbname=oo_battle',
    'db_user' => 'root',
    'db_pass' => 'root'
];