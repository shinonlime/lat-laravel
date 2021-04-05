<?php
require_once("animal.php");
require_once("ape.php");
require_once("frog.php");

$animal = new Animal("Shaun");
echo "Name: $animal->nama<br>";
echo "Legs: $animal->legs<br>";
echo "Cold blooded: $animal->cold_blooded<br><br>";

$frog = new Frog("Buduk");
echo "Name: $frog->nama<br>";
echo "Legs: $frog->legs<br>";
echo "Cold blooded: $frog->cold_blooded<br>";
echo "Jump: {$frog->jump()}<br><br>";

$ape = new Ape("Kera Sakti");
echo "Name: $ape->nama<br>";
echo "Legs: $ape->legs<br>";
echo "Cold blooded: $ape->cold_blooded<br>";
echo "Jump: {$ape->yell()}<br>";
?>