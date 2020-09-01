<?php
include "koneksi.php";

$id=$_GET['id'];
$username=$_GET['username'];
$gender = $_GET['gender'];
$password=$_GET['password'];
$phone=$_GET['phone'];
$cmd=$_GET['cmd'];
			
if ($cmd=="save") {
	$sql="INSERT into form3 (id,username,password,phone,gender) values($id,'$username','$password',$phone,'$gender')";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif ($cmd=="delete") {
	$sql="DELETE FROM form3 where id=$id";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif($cmd=="update"){
	$sql="update form3 SET username='$username',password='$password',phone=$phone,gender='$gender' where id=$id";
	$query=mysqli_query($con,$sql) or die($sql);

}

header("location:form3.php");
?>

