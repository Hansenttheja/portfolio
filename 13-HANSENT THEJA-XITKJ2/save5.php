<?php
include "koneksi.php";

$nig=$_GET['nig'];
$nama=$_GET['nama'];
$tanggal=$_GET['tanggal'];
$jam=$_GET['jam'];
$keperluan1=$_GET['keperluan1'];
$keperluan2=$_GET['keperluan2'];
$keperluan3=$_GET['keperluan3'];
$keperluan4=$_GET['keperluan4'];
$cmd=$_GET['cmd'];
$gabung=substr($keperluan1.$keperluan2.$keperluan3.$keperluan4,	 0 ,-2);

if ($cmd=="SAVE") {
	$sql="INSERT into form5 (nig,nama,tanggal,jam,keperluan) values($nig,'$nama','$tanggal','$jam','$gabung')";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif ($cmd=="delete") {
	$sql="DELETE FROM form5 where nig='$nig'";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif($cmd=="UPDATE"){
	$sql="UPDATE form5 SET nama='$nama', tanggal='$tanggal',jam='$jam',keperluan='$gabung' where nig='$nig'";
	$query=mysqli_query($con,$sql) or die($sql);

}

header("location:form5.php");
?>