<?php
session_start();
$username = $_SESSION['username'];

if ($username =="") {
	header("location:index.php");
}
?>