<?php

class ShipLoader
{
    public function get_ships()
    {

        $ships = [];

        /** @var Ship $ship1 */
        $ship1 = new Ship('Jedi Starfighter');
        $ship1->setWeaponPower(5);
        $ship1->setJediFactor(15);
        $ship1->setStrength(30);
        $ships['jedi_starfighter'] = $ship1;

        $ship2 = new Ship('Cloakshape Fighter');
        $ship2->setWeaponPower(2);
        $ship2->setJediFactor(2);
        $ship2->setStrength(70);
        $ships['cloakshape_fighter'] = $ship2;

        $ship3 = new Ship('Super Star Destroyer');
        $ship3->setWeaponPower(2);
        $ship3->setJediFactor(2);
        $ship3->setStrength(70);
        $ships['super_star_destroyer'] = $ship3;

        $ship4 = new Ship('RZ1 A Wing Interceptor');
        $ship4->setWeaponPower(2);
        $ship4->setJediFactor(2);
        $ship4->setStrength(70);
        $ships['rz1_a_wing_interceptor'] = $ship4;

        return $ships;
    }
}