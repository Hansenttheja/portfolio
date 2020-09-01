<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/css2?family=Chilanka&display=swap" rel="stylesheet">
	<style type="text/css">
html{
	font-family: 'Chilanka', cursive;
	background: #ddd;		
}
table{
	width: 100%;
	border-collapse: collapse;
	margin-bottom: 15px;
}
tr:nth-child(even) {
 	background-color: #eee;
}
h1{
	text-align: center;
}
tr{
	text-align: center;
}
.button{
background-image: linear-gradient(to bottom right, #03fcfc, #0341fc);
border: 1px solid #03fcfc;
color: white;
padding: 15px 32px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
}
#cmd{
	margin-left: 430px;
	background-image: linear-gradient(to bottom right, #e1eb34, #00ff04);
	border:none;
	color: white;
	padding: 15px 32px;
	text-align: center;
	text-decoration: none;
	display: inline-block;
	font-size: 16px;
}
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=number], select {
  width: 100%;
  padding: 12px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=email], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=date], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 18px;
}
input[type=time], select {
  width: 100%;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  font-size: 18px;
}
	</style>
<body>
	<script type="text/javascript">
		function del(nig){
		location.href="save5.php?nig="+nig+"&cmd=delete";
	}
	function upd(nig,nama,tanggal,jam,keperluan){
		document.getElementById('nig').value = nig;
		document.getElementById('nama').value = nama;
		document.getElementById('tanggal').value = tanggal;	
		document.getElementById('jam').value=jam;
		
		if (keperluan.includes("Buku Paket")) {
			document.getElementById('keperluan1').checked = true;
		}
		if (keperluan.includes("Buku Tulis")) {
			document.getElementById('keperluan2').checked = true;
		}
		if (keperluan.includes("Laptop")) {
			document.getElementById('keperluan3').checked = true;
		}
		if (keperluan.includes("Alat Tulis")) {
			document.getElementById('keperluan4').checked = true;
		}	
		document.getElementById('cmd').innerHTML = "UPDATE";
		document.getElementById('cmd').value = "UPDATE";
		
	}
	</script>
	<form action="save5.php" method="GET">
		<table>
			<h1>Form Jadwal Pelajaran</h1>
			<tr>
				<td>No Induk Guru</td>
				<td>:</td>
				<td><input type="number" name="nig" id="nig"></td>
			</tr>

			<tr>
				<td>Nama Pelajaran</td>
				<td>:</td>
				<td><input type="text"  name="nama" id="nama"></td>	
			</tr>

			<tr>
				<td>Tanggal Pelajaran</td>
				<td>:</td>
				<td><input type="date" name="tanggal" id="tanggal"></td>
			</tr>

			<tr>
				<td>Jam Pelajaran</td>
				<td>:</td>
				<td><input type="time" name="jam" id="jam"></td>
			</tr>

			<tr>
				<td>Keperluan</td>
				<td>:</td>
				<td>
				<input type="checkbox" name="keperluan1" id="keperluan1" value="Buku Paket, ">Buku Paket
				<input type="checkbox" name="keperluan2" id="keperluan2" value="Buku Tulis, ">Buku Tulis
				<input type="checkbox" name="keperluan3" id="keperluan3" value="Laptop, ">Laptop
				<input type="checkbox" name="keperluan4" id="keperluan4" value="Alat Tulis, ">Alat Tulis
			</td></td>
			</tr>

			<table>
				<tr>
					<input type="submit" name="cmd" id="cmd" value="SAVE">
					<input type="hidden" name="namalama" id="namalama">
				</tr>
			</table>
		</table>
	</form>
	<table>
		<tr bgcolor="#02ed0a" align="center">
			<th>No</th>
			<th>NIK</th>
			<th>NAMA</th>
			<th>TANGGAL LAHIR</th>
			<th>JENJANG PENDIDIKAN</th>
			<th>HOBBY</th>
			<th colspan="2">Action</th>
		</tr>

		<?php
			include "koneksi.php";


			$sql="select * from form5";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);

			for ($i=1; $i <=$num ; $i++) { 
				$result=mysqli_fetch_array($query);
				$nig=$result['nig'];
				$nama=$result['nama'];
				$tanggal=$result['tanggal'];
				$jam=$result['jam'];
				$keperluan=$result['keperluan'];

		?>

		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $nig; ?></td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $tanggal; ?></td>
			<td><?php echo $jam ?></td>
			<td><?php echo $keperluan; ?></td>
			<td><input type="submit" value="delete" onclick="del(<?php echo "$nig"?>)"></td>
			<td><input type="submit" value="update" onclick="upd(<?php echo "$nig,'$nama','$tanggal','$jam','$keperluan'"?>)"></td>
		</tr>
		<?php
	}
		?>
	</table>
</body>
</html>