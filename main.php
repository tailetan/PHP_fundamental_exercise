<?php

// require __DIR__ . '/vendor/autoload.php';

// use Transportation\Car;
// use Transportation\Truck;

// $my_car = new Car('Tien Nguyen', 'Black', '2021', 'Toyota', FALSE, FALSE);

// var_dump($my_car->getInfo());

// $my_car->healthCheck();



// $my_truck = new Truck('Tien Nguyen', 'Green', '2021', 'Hyundai', 20);

// var_dump($my_truck->getInfo());

// $my_truck->healthCheck();

require __DIR__ . '/vendor/autoload.php';

use Staff\Employee;
use Staff\Manager;


$employee = new Employee('Tan Tai', 'Le', '22', 'LAMP', '1000000', '11/01/2022');

var_dump($employee->getInfo());

$employee->timeKeeping();


$manager = new Manager('Tien', 'Nguyen', '27', 'LAMP', array('Tai', 'An', 'Khanh'));

var_dump($manager->getInfo());

$manager->timeKeeping();



// $my_truck = new Truck('Tien Nguyen', 'Green', '2021', 'Hyundai', 20);

// var_dump($my_truck->getInfo());

// $my_truck->healthCheck();