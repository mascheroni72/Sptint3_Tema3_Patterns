<?php
require_once'Tigger.php';

$tigger = Tigger::getInstance();

$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();
$tigger->roar();

echo "Winnie The Pooh has roared " . $tigger->getCounter() . " times" . PHP_EOL;
?>