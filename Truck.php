<?php

require_once "Vehicle.php";

class Truck extends Vehicle
{
    private string $energy;
    private int $storageCapacity;
    private int $truckload = 0;

    public function __construct(int $storageCapacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->storageCapacity = $storageCapacity;
        $this->energy = $energy;
    }

    public function isItFull(): string
    {
        if ($this->truckload < $this->storageCapacity) {
            return "in filling";
        }
        return "full";
    }

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): void
    {
        $this->energy = $energy;
    }

    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }

    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }

    public function getTruckload(): int
    {
        return $this->truckload;
    }

    public function setTruckload(int $truckload): void
    {
        $this->truckload = $truckload;
    }


}