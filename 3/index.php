<?php  
include 'IronMan.php';
include 'CaptainAmerica.php';
include 'Thor.php';
include 'Thanos.php';

$stark = new IronMan();
$stark->arcReactor();

$steve = new CaptainAmerica();
$steve->vibraniumShield();

$odinson = new Thor();
$odinson->stormBreaker();

$madTitan = new Thanos();
$madTitan->infinityGauntlet();

?>