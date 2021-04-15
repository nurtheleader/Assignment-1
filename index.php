<?php  

include 'MyName.php';
include 'IronMan.php';
include 'CaptainAmerica.php';

//problem #1 objects
$naam = new MyName();
$naam->name('Nur Mohammad Mamun<br><br><br>');

//problem #2 objects
$naam->setMode('This string was inserted using a setter<br><br><br>');
$naam->getMode();

//problem #3 objects
$tonyStark = new IronMan();
$tonyStark->arcReactor();

$steveRogers = new CaptainAmerica();
$steveRogers->vibraniumShield();

?>