<?php

require_once('Vehicle.php');

class Truck extends Vehicle {
    public const ALLOWED_ENERGIES = ['gasoil', 'electric'];
    private string $energy;
    private int $energyLevel;
    private int $loadingCapacity;
    private int $loading = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $loadingCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->loadingCapacity = $loadingCapacity;
    }

    public function fillingTruck() : string {
        $sentence = "";
        if($this->loading < 0 || $this->loading > $this->loadingCapacity)  {
            $sentence = "Loading impossible !";
        } else if ($this->loading < $this->loadingCapacity){ 
            $sentence = "In filling.";
        } else {
            $sentence = "Full.";
        }
        return $sentence;
    }

    public function start() : string {
        $sentence = "Let's go !!!";
        return $sentence;
    }

    public function getEnergy() : string {
        return $this->energy;
    }

    public function setEnergy(string $energy) : Truck {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel() : int {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel) : void {
        $this->energyLevel = $energyLevel;
    }

    public function getLoadingCapacity() : int {
        return $this->energyLevel;
    }

    public function setLoadingCapacity(int $loadingCapacity) : void {
        $this->loadingCapacity = $loadingCapacity;
    }

    public function getLoading() : int {
        return $this->loading;
    }

    public function setLoading(int $loading) : void {
        $this->loading = $loading;
    }

}