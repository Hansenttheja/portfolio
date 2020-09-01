<?php
include "koneksi.php";

$username=$_GET['username'];
$password=$_GET['password'];
$team = $_GET['team'];
$numb=$_GET['numb'];
$color=$_GET['color'];
$cmd=$_GET['cmd'];

if ($cmd=="save") {
	$sql="INSERT into form4 (username,password,team ,numb,color) values('$username','$password','$team','$numb','$color')";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif ($cmd=="delete") {
	$sql="DELETE FROM form4 where username='$username'";
	$query=mysqli_query($con,$sql) or die($sql);
	echo $sql;
	echo $username;
}elseif($cmd=="update"){
	$sql="UPDATE form4 SET password='$password', team='$team',numb='$numb',color='$color' where username='$username'";
	$query=mysqli_query($con,$sql) or die($sql);

}

header("location:form4.php");
?>