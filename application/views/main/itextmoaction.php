<?php

require_once 'itextmo.php';

$number=$_POST['number'];
$message=$_POST['message'];




$send = itext();
$send->sendMsg($number,$message,'TR-MONIC851230_P5X52');




header("location: index.php"); 
?>
