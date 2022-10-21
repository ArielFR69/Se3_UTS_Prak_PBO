<?php 

require_once 'No 2 interface.php';

class Airplane implements Flyer {
    public function takeOff() {
        return 'Airplane Take Off';
    }
    
    public function land() {
        return 'Airplane landing';
    }

    public function fly() {
        return 'The Airplane is on flight';
    }
}

class Bird implements Flyer {
    public function takeOff() {
        return 'Bird take off from their nest';
    }
    
    public function land() {
        return 'Bird lands on their nest';
    }

    public function fly() {
        return 'Bird flies through';
    }

    public function buildNest() {
        return 'Bird is constructing nest';
    }

    public function layEggs() {
        return 'Birds lay their eggs';
    }
}

class Superman implements Flyer {
    public function takeOff() {
        return 'Superman flght take off';
    }
    
    public function land() {
        return 'Superman lands on the ground';
    }

    public function fly() {
        return 'Superman flight through the night';
    }

    public function leapBuilding() {
        return 'Superman agility jumping and leaping through skyscraper';
    }

    public function stopBullet() {
        return 'Superman stopping bullets with freezing breath';
    }
}

$airplane = new Airplane;
$bird = new Bird;
$superman = new Superman;