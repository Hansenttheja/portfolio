<?php
include "koneksi.php";

$nis=$_GET['nis'];
$name=$_GET['name'];
$gender = $_GET['gender'];
$email=$_GET['email'];
$dob=$_GET['dob'];
$cmd=$_GET['cmd'];

if ($cmd=="save") {
	$sql="INSERT into form1 (nis,name,gender,email,dob) values($nis,'$name','$gender','$email','$dob')";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif ($cmd=="delete") {
	$sql="DELETE FROM form1 where nis=$nis";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif($cmd=="update"){
	$sql="UPDATE form1 SET name='$name', gender='$gender',email='$email',dob='$dob' where nis=$nis";
	$query=mysqli_query($con,$sql) or die($sql);

}

header("location:form1.php");
?>