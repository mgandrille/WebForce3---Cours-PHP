<?php

class Ship {
    private $name = '';
    private $weaponPower = 0;
    private $spatiodriveBooster = 0;
    private $strength = 0;

    public function sayHello() {
        echo 'Hello!';
    }
    
    public function getName() {
        return $this->name;
    }

    public function getNameUppercase() {
        return strtoupper($this->name);
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getWeaponPower() {
        return $this->weaponPower;
    }

    public function setWeaponPower(int $weaponPower) {
        $this->weaponPower = $weaponPower;
    }

    public function getSpatiodriveBooster() {
        return $this->spatiodriveBooster;
    }

    public function setSpatiodriveBooster(int $spatiodriveBooster) {
        $this->spatiodriveBooster = $spatiodriveBooster;
    }

    public function getStrength() {
        return $this->strength;
    }

    public function setStrength(int $strength) {
        $this->strength = $strength;
    }

    /**
     * @param bool $useShortFormat
     */
    public function getNameAndSpecs(bool $useShortFormat = false)
    {
        if ($useShortFormat) {
            return sprintf(
                '%s (F:%s, BS:%s, R:%s)',
                $this->name,
                $this->weaponPower,
                $this->spatiodriveBooster,
                $this->strength);
        }
        else {
            return sprintf(
                'Vaisseau : %s (Force: %s, Booster spatiodrive: %s, Résistance: %s)',
                $this->name,
                $this->weaponPower,
                $this->spatiodriveBooster,
                $this->strength);
        }
    }

    /**
     * @param Ship $ship
     */
    public function doesThisShipHasMoreStrengthThanMe(Ship $ship) 
    {
        return $ship->strength > $this->strength;
    }

}