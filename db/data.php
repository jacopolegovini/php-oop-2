<?php
require_once __DIR__ . "/./../classes/Food.php";
require_once __DIR__ . "/./../classes/Toy.php";
require_once __DIR__ . "/./../classes/Doghouse.php";


// Food
$kibble = new Food('Light', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfXLdIa46322ZkagZNk_UGwDHFbQm9ln6IZQ&s', 40, 120, new Category('Cane'));
$meat = new Food('Medium/Heavy', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfXLdIa46322ZkagZNk_UGwDHFbQm9ln6IZQ&s', 60, 21, new Category('Cane'));
$fish = new Food('Light', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTfXLdIa46322ZkagZNk_UGwDHFbQm9ln6IZQ&s', 35, 0, new Category('Gatto'));

$foods = [$kibble, $meat, $fish];

// Toy
$frisbee = new Toy('Throwing', 'https://singpetclub.com/media/catalog/product/cache/c2b537241485d7caf08a9fcbaebdec88/K/o/Kong-Goodie-Bone-Rubber-Dog-Toy-Kong03_2.jpg', 15, 52, new Category('Cane'));
$ball = new Toy('Throwing', 'https://singpetclub.com/media/catalog/product/cache/c2b537241485d7caf08a9fcbaebdec88/K/o/Kong-Goodie-Bone-Rubber-Dog-Toy-Kong03_2.jpg', 12, 0, new Category('Cane'));
$scratch = new Toy('Static', 'https://singpetclub.com/media/catalog/product/cache/c2b537241485d7caf08a9fcbaebdec88/K/o/Kong-Goodie-Bone-Rubber-Dog-Toy-Kong03_2.jpg', 30, 127, new Category('Gatto'));

$toys = [$frisbee, $ball, $scratch];


//Doghouse
$outdoorDogHouse = new DogHouse('Wood', 'https://m.media-amazon.com/images/I/71MFvxPY6DL._AC_UF1000,1000_QL80_.jpg', 15, 0, new Category('Cane'));
$indoorDogHouse = new DogHouse('Feathers', 'https://m.media-amazon.com/images/I/71MFvxPY6DL._AC_UF1000,1000_QL80_.jpg', 15, 8, new Category('Cane'));

$doghouses = [$outdoorDogHouse, $indoorDogHouse];