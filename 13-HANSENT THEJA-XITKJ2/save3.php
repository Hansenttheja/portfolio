<?php
include "koneksi.php";

$nama=$_GET['nama'];
$email=$_GET['email'];
$telp=$_GET['telp'];
$berat=$_GET['berat'];
$tinggi = $_GET['tinggi'];
$cmd=$_GET['cmd'];

if ($cmd=="save") {
	$sql="INSERT into form3 (nama,email,telp,berat,tinggi) values('$nama','$email','$telp','$berat','$tinggi')";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif ($cmd=="delete") {
	$sql="DELETE FROM form3 where nama='$nama'";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif($cmd=="update"){

	$sql="UPDATE form3 SET email='$email', telp='$telp',berat='$berat',tinggi='$tinggi' where nama='$nama'";
	$query=mysqli_query($con,$sql) or die($sql);
	echo $id;
}

header("location:form3.php");
?>