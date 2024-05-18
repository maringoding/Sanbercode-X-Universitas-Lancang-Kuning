<?php
require_once 'animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

// Release 0
$sheep = new Animal("shaun");
echo "Name: " . $sheep->name . "\n"; // "shaun"
echo "Legs: " . $sheep->legs . "\n"; // 4
echo "Cold blooded: " . $sheep->cold_blooded . "\n"; // "no"

// Release 1
$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->name . "\n"; // "kera sakti"
echo "Legs: " . $sungokong->legs . "\n"; // 2
echo "Cold blooded: " . $sungokong->cold_blooded . "\n"; // "no"
$sungokong->yell(); // "Auooo"
    
$kodok = new Frog("buduk");
echo "Name: " . $kodok->name . "\n"; // "buduk"
echo "Legs: " . $kodok->legs . "\n"; // 4
echo "Cold blooded: " . $kodok->cold_blooded . "\n"; // "no"
$kodok->jump(); // "hop hop"
?>