<?php
session_start();
$_SESSION["cstudents"]=$_GET["cstudents_id"];
$_SESSION["class_id"]=$_GET["classid"];
header("location:stream.php");
?>