<?php 

require_once 'No 3 abstract.php';
require_once 'No 3 interface.php';

class Animal  
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    
    public function eat()
    {
        return $this->name . 'Still eating';
    }
}

class Homosapiens extends Animal {}

class Airplane2 extends Vehicle implements Flyer
{
    public function __construct($maxLoad, $name)
    {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }
    
    public function takeOff()
    {
        return "$this->name Taking Off";
    }
    
    public function land()
    {
        return "$this->name Landing";
    }

    public function fly()
    {
        return "$this->name On the flight";
    }

    public function calcFuelNeeds()
    {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();

        
        
        return ceil($fuel /= $trip);
    }
}

class Superman2 extends Homosapiens implements Flyer
{
    public function takeOff()
    {
        return "$this->name Taking Off";
    }
    
    public function land()
    {
        return "$this->name Landing on the ground";
    }

    public function fly()
    {
        return "$this->name Flight Through";
    }

    public function leapBuilding()
    {
        return "Superman agility jumping and leaping through skyscraper";
    }

    public function stopBullet()
    {
        return "Villain shoots $this->name but stopped with freezing breath";
    }
}

$burung = new Animal('Burung');
$manusia = new Homosapiens('Ningen');
$airplane2 = new Airplane2(25000, 'Garuda Indonesia');
$superman2 = new Superman2('Superman');