<?php

require_once "Vehicle.php";

class Car extends Vehicle
{
    // la constante ALLOWED_ENERGIES est propre à la classe et non à l'objet
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    private string $energy;
    private int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        /*Pour aussi faire la vérification au moment de l'Instanciation, 
        on peut modifier la méthode __construct() en remplaçant $this->energy = $energy; par $this->setEnergy($energy);*/
        $this->setEnergy($energy);
    }


    public function getEnergy(): string
    {
        return $this->energy;
    }


    public function setEnergy(string $energy): Car
    {
        /*La constante étant propre à la classe et non à l'objet, 
        il faut utiliser un nouveau mot-clé self:: qui représente la classe 
        (au lieu de $this qui représente l'instance en cours de la classe).*/
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }


    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

}
