<?php
include "koneksi.php";

$nik=$_GET['nik'];
$nama=$_GET['nama'];
$tanggal=$_GET['tanggal'];
$jenjang=$_GET['jenjang'];
$hobby1=$_GET['hobby1'];
$hobby2=$_GET['hobby2'];
$hobby3=$_GET['hobby3'];
$hobby4=$_GET['hobby4'];
$cmd=$_GET['cmd'];
$gabung=substr($hobby1.$hobby2.$hobby3.$hobby4,	 0 ,-2);

if ($cmd=="SAVE") {
	$sql="INSERT into form4 (nik,nama,tanggal,jenjang,hobby) values($nik,'$nama','$tanggal','$jenjang','$gabung')";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif ($cmd=="delete") {
	$sql="DELETE FROM form4 where nik='$nik'";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif($cmd=="UPDATE"){
	$sql="UPDATE form4 SET nama='$nama', tanggal='$tanggal',jenjang='$jenjang',hobby='$gabung' where nik='$nik'";
	$query=mysqli_query($con,$sql) or die($sql);

}

header("location:form4.php");
?>