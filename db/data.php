<?php
require_once __DIR__ . "/./../classes/Food.php";
require_once __DIR__ . "/./../classes/Toy.php";
require_once __DIR__ . "/./../classes/Doghouse.php";


// Food
$kibble = new Food('Light', '...', 40, new Category('Dog'));
$meat = new Food('Medium/Heavy', '...', 60, new Category('Dog'));
$fish = new Food('Light', '...', 35, new Category('Cat'));

$foods = [$kibble, $meat, $fish];


// Toy
$frisbee = new Toy('Throwing', '...', 15, new Category('Dog'));
$ball = new Toy('Throwing', '...', 12, new Category('Dog'));
$scratch = new Toy('Static', '...', 30, new Category('Cat'));

$toys = [$frisbee, $ball, $scratch];


//Doghouse
$outdoorDogHouse = new DogHouse('Wood', '...', 15, new Category('Dog'));
$indoorDogHouse = new DogHouse('Feathers', '...', 15, new Category('Dog'));

$doghouses = [$outdoorDogHouse, $indoorDogHouse];
