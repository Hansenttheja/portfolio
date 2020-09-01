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
input[type=color], select {
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
		function del(nik){
		location.href="save4.php?nik="+nik+"&cmd=delete";
	}
	function upd(nik,nama,tanggal,jenjang,hobby){
		document.getElementById('nik').value = nik;
		document.getElementById('nama').value = nama;
		document.getElementById('tanggal').value = tanggal;	
		if (jenjang=="SD") {
			document.getElementById('jenjang1').checked = true;

		}else if (jenjang=="SMP")  {
			document.getElementById('jenjang2').checked = true;
		}else if (jenjang=="SMA") {
			document.getElementById('jenjang3').checked = true;
		}else if (jenjang=="SMK") {
			document.getElementById('jenjang4').checked = true;
		}else{
			document.getElementById('jenjang5').checked = true;
		}
		
		if (hobby.includes("main game")) {
			document.getElementById('hobby1').checked = true;
		}
		if (hobby.includes("nonton")) {
			document.getElementById('hobby2').checked = true;
		}
		if (hobby.includes("dengar lagu")) {
			document.getElementById('hobby3').checked = true;
		}
		if (hobby.includes("membaca")) {
			document.getElementById('hobby4').checked = true;
		}	
		document.getElementById('cmd').innerHTML = "UPDATE";
		document.getElementById('cmd').value = "UPDATE";
		
	}
	</script>
	<form action="save4.php" method="GET">
		<table>
			<h1>Form Bio Data Anak</h1>
			<tr>
				<td>NIK</td>
				<td>:</td>
				<td><input type="number" name="nik" id="nik"></td>
			</tr>

			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text"  name="nama" id="nama"></td>	
			</tr>

			<tr>
				<td>Tanggal Lahir</td>
				<td>:</td>
				<td><input type="date" name="tanggal" id="tanggal"></td>
			</tr>

			<tr>
				<td>Jenjang Pendidikan</td>
				<td>:</td>
				<td><input type="radio" name="jenjang" id="jenjang1" 	 value="SD">SD
					<input type="radio" name="jenjang" id="jenjang2" value="SMP">SMP
					<input type="radio" name="jenjang" id="jenjang3" value="SMA">SMA
					<input type="radio" name="jenjang" id="jenjang4" value="SMK">SMK
					<input type="radio" name="berat" id="berat5" value="kuliah">Kuliah
					
				</td>
			</tr>

			<tr>
				<td>Hobby</td>
				<td>:</td>
				<td>
				<input type="checkbox" name="hobby1" id="hobby1" value="main game, ">Main Game
				<input type="checkbox" name="hobby2" id="hobby2" value="nonton, ">Nonton
				<input type="checkbox" name="hobby3" id="hobby3" value="dengar lagu, ">Dengar Lagu
				<input type="checkbox" name="hobby4" id="hobby4" value="membaca, ">Membaca
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


			$sql="select * from form4";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);

			for ($i=1; $i <=$num ; $i++) { 
				$result=mysqli_fetch_array($query);
				$nik=$result['nik'];
				$nama=$result['nama'];
				$tanggal=$result['tanggal'];
				$jenjang=$result['jenjang'];
				$hobby=$result['hobby'];

		?>

		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $nik; ?></td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $tanggal; ?></td>
			<td><?php echo $jenjang ?></td>
			<td><?php echo $hobby; ?></td>
			<td><input type="submit" value="delete" onclick="del(<?php echo "$nik"?>)"></td>
			<td><input type="submit" value="update" onclick="upd(<?php echo "'$nik','$nama','$tanggal','$jenjang','$hobby'"?>)"></td>
		</tr>
		<?php
	}
		?>
	</table>
</body>
</html>