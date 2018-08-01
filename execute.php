<?php

require_once './on-off/Jyra.php';

if (isset($_POST['cooperation'])) {
	$cooperation = $_POST['cooperation'];
} else {
	$cooperation = '';
}
if (isset($_POST['cooperationOn'])) {
	$cooperationOn = $_POST['cooperationOn'];
} else {
	$cooperationOn = '';
}
if (isset($_POST['cooperationOff'])) {
	$cooperationOff = $_POST['cooperationOff'];
} else {
	$cooperationOff = '';
}

$jyra = new Jyra();
$jyra->execute($cooperation, $cooperationOn, $cooperationOff);