<?php 

require_once 'No 4 Abstract.php';
require_once 'No 4 interface.php';

class RiverBarge2 extends Vehicle implements Sailer {
    public function __construct($maxLoad, $name) {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds() {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();
        
        return ceil($fuel /= $trip);
    }

    public function dock() {
        return $this->name . 'On The Dock';
    }
    
    public function cruise() {
        return $this->name . 'Set Sail, Cruising';
    }
}

class Airplane2 implements Flyer {
    public function takeOff() {
        return 'Airplane Take Off';
    }
    public function land() {
        return 'Airplane Landing';
    }
    public function fly() {
        return 'The Airplane is on flight';
    }
}

class SeaPlane extends Vehicle implements Sailer {
    public function __construct($maxLoad, $name) {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds() {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();
       
        return ceil($fuel /= $trip);
    }

    public function dock() {
        return $this->name . 'On the Shore';
    }
    
    public function cruise() {
        return $this->name . 'Set Sail, Cruising';
    }

    public function takeOff() {
        return $this->name . 'Taking Off';
    }
    
    public function land() {
        return $this->name . 'Landing';
    }

    public function fly() {
        return $this->name . 'On Flight';
    }
}

class Helicopter extends Vehicle {
    public function __construct($maxLoad, $name) {
        $this->maxLoad = $maxLoad;
        $this->name = $name;
    }

    public function calcFuelNeeds() {
        $fuel = $this->calcFuelEfficiency();
        $trip = $this->calcTripDistance();
     
        return ceil($fuel /= $trip);
    }
    public function takeOff() {
        return $this->name . 'Taking Off';
    }
    
    public function land() {
        return $this->name . 'Landing';
    }

    public function fly() {
        return $this->name . 'On Flight';
    }
}

$riverBarge2 = new RiverBarge2(30000, 'Tanjung Perak');
$seaPlane = new SeaPlane(20000, 'Moby Dick');
$helicopter = new Helicopter(10000, 'Haumea');