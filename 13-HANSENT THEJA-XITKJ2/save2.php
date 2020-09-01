<?php
include "koneksi.php";

$id=$_GET['id'];
$idlama=$_GET['idlama'];
$nama=$_GET['nama'];
$gender=$_GET['gender'];
$tanggal = $_GET['tanggal'];
$jam=$_GET['jam'];
$cmd=$_GET['cmd'];

if ($cmd=="save") {
	$sql="INSERT into form2 (id,nama,gender,tanggal,jam) values($id,'$nama','$gender','$tanggal','$jam')";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif ($cmd=="delete") {
	$sql="DELETE FROM form2 where id=$id";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif($cmd=="update"){

	$sql="UPDATE form2 SET nama='$nama', gender='$gender',tanggal='$tanggal',jam='$jam' where id='$idlama'";
	$query=mysqli_query($con,$sql) or die($sql);
	echo $id;
}

header("location:form2.php");
?>