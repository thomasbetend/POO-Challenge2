<?php

class Vehicle {

    protected int $nbWheels ;
    protected int $currentSpeed;
    protected string $color; 
    protected int $nbSeats;

public function __construct(string $color, int $nbSeats,)
{
    $this->color = $color;
    $this->nbSeats = $nbSeats;
}

public function setColor(string $color) : void {
    $this->color = $color;
}

public function getColor() : string {
    return $this->color;
}

public function setCurrentSpeed(int $currentSpeed) : void {
    $this->currentSpeed = $currentSpeed;
}

public function getCurrentSpeed() : int {
    return $this->currentSpeed;
}

public function setNbSeats(int $nbSeats) : void {
    $this->nbSeats = $nbSeats;
}

public function getNbSeats() : int {
    return $this->nbSeats;
}

public function setNbWheels(int $nbWheels) : void {
    $this->nbWheels = $nbWheels;
}

public function getNbWheels() : int {
    return $this->nbWheels;
}

public function forward() : string {
    return "Go ! Moving at " . $this->currentSpeed . " km/h !";
}

public function brake(): string {
    $sentence = "";
    while($this->currentSpeed>0){
        $this->currentSpeed-=5;
        $sentence .= "Brake !!! ";
    }     
    $sentence .= "I'm stopped.";
    return $sentence;
}
}