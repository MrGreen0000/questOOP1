<?php

class Car
{
 
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;


    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string

    {

    $this->currentSpeed = 50;


    return "Go !";

        }
    public function brake(): string

    {

   $sentence = "";

   while ($this->currentSpeed > 0) {

       $this->currentSpeed--;

       $sentence .= "Brake !!!";

   }

   $sentence .= "I'm stopped !";

   return $sentence;

}
      
    public function getnbWheeels(): int
    {
    return $this->nbWheels;
    }

    public function setnbWheeels(int $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }

    public function getcurrentSpeed(): int
    {
    return $this->currentSpeed;
    }

    public function setcurrentSpeed(int $currentSpeed): void
    {   
    if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
    }
    }
   
    public function getColor(): string
    {
    return $this->color;
    }

    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getnbSeats(): int
    {
    return $this->nbSeats;
    }

    public function setnbSeats(int $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

    public function getenergy(): string
    {
    return $this->energy;
    }

    public function setenergy(string $energy): void
    {
        $this->energy = $enrgy;
    }

    public function getenergyLevel(): int
    {
    return $this->energyLevel;
    }

    public function setenergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $enrgyLevel;
    }

    
    
}

?>
