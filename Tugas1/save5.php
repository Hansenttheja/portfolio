<?php
include "koneksi.php";

$username=$_GET['username'];
$password=$_GET['password'];
$jointime = $_GET['jointime'];
$satisfaction=$_GET['satisfaction'];
$services=$_GET['services'];
$cmd=$_GET['cmd'];

if ($cmd=="save") {
	$sql="INSERT into form5 (username,password,jointime,satisfaction,services) values('$username','$password','$jointime','$satisfaction','$services')";
	$query=mysqli_query($con,$sql) or die($sql);
	echo $cmd;

}elseif ($cmd=="delete") {
	$sql="DELETE FROM form5 where username='$username'";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif($cmd=="update"){
	$sql="UPDATE form5 SET password='$password',jointime='$jointime',satisfaction='$satisfaction',services='$services' where username='$username'";
	$query=mysqli_query($con,$sql) or die($sql);

}

header("location:form5.php");
?>