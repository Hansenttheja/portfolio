<?php
include "koneksi.php";

$nama=$_GET['nama'];
$tanggal=$_GET['tanggal'];
$jam=$_GET['jam'];
$jenis=$_GET['jenis'];
$lama=$_GET['lama'];
$telp=$_GET['telp'];
$cmd=$_GET['cmd'];


if ($cmd=="SAVE") {
	$sql="INSERT into form6 (nama,tanggal,jam,jenis,lama,telp) values('$nama','$tanggal','$jam','$jenis','$lama','$telp')";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif ($cmd=="delete") {
	$sql="DELETE FROM form6 where nama='$nama'";
	$query=mysqli_query($con,$sql) or die($sql);
}elseif($cmd=="UPDATE"){
	$sql="UPDATE form6 SET tanggal='$tanggal',jam='$jam',jenis='$jenis',lama='$lama',telp='$telp' where nama='$nama'";
	$query=mysqli_query($con,$sql) or die($sql);

}

header("location:form6.php");
?>