<?php
include "koneksi.php";

$nama=$_GET['nama'];
$namalama=$_GET['namalama'];
$jenis=$_GET['jenis'];
$tanggal = $_GET['tanggal'];
$harga=$_GET['harga'];
$color=$_GET['color'];
$cmd=$_GET['cmd'];

if ($cmd=="save") {
	$sql="INSERT into form1 (nama,jenis,tanggal,harga,warna) values('$nama','$jenis','$tanggal','$harga','$color')";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif ($cmd=="delete") {
	$sql="DELETE FROM form1 where nama='$nama'";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif($cmd=="update"){
	$sql="UPDATE form1 SET nama='$nama', jenis='$jenis',tanggal='$tanggal',harga='$harga',warna='$color' where nama='$namalama'";
	$query=mysqli_query($con,$sql) or die($sql);

}

header("location:form1.php");
?>