<?php
include "koneksi.php";

$id=$_GET['id'];
$nama=$_GET['nama'];
$jamkerja=$_GET['jamkerja'];
$status=$_GET['status'];
$email=$_GET['email'];
$cmd=$_GET['cmd'];

if ($cmd=="save") 
{
	$sql="INSERT into form6(id,nama,jamkerja,status,email) values($id,'$nama','$jamkerja','$status','$email')";
	$query=mysqli_query($con,$sql) or die($sql);	
}elseif ($cmd=="delete") {
	$sql="DELETE FROM form6 WHERE id=$id";
	$query=mysqli_query($con,$sql) or die($sql);	
}elseif ($cmd=="update") {
	$sql="UPDATE form6	SET nama='$nama', jamkerja='$jamkerja',status='$status',email='$email' WHERE id=$id";
	$query=mysqli_query($con,$sql) or die($sql);
}
	

header("location:form6.php")
?>