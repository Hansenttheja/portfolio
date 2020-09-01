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
</head>
<body>
	<script type="text/javascript">
		function del(nama){
		location.href="save1.php?nama="+nama+"&cmd=delete";
	}
	function upd(nama,jenis,tanggal,harga,warna){
		var namalama = nama;
		document.getElementById('nama').value = nama;
		document.getElementById('namalama').value=nama;
		if (jenis=="roda2") {
			document.getElementById('jenis1').checked = true;

		}else if (jenis=="roda4") {
			document.getElementById('jenis2').checked = true;
		}else{
			document.getElementById('jenis3').checked = true;
		}
		document.getElementById('tanggal').value = tanggal;
		document.getElementById('harga').value = harga;
		document.getElementById('color').value = warna;	
		document.getElementById('cmd').innerHTML = "update";
		document.getElementById('cmd').value = "update";
		
	}
	</script>
	<form action="save1.php" method="GET">
		<table>
			<h1>Form Kepemilikan Kendaraan</h1>
			<tr>
				<td>Nama Pemilik</td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>

			<tr>
				<td>Jenis Kendaraan</td>
				<td>:</td>
				<td><input type="radio" name="jenis" id="jenis1" value="roda2">Roda 2 
					<input type="radio" name="jenis" id="jenis2" value="roda4">Roda 4 
					<input type="radio" name="jenis" id="jenis3" value="roda4keatas"> Roda 4 Keatas
				</td>
			</tr>

			<tr>
				<td>Tanggal Beli</td>
				<td>:</td>
				<td><input type="date" name="tanggal" id="tanggal"></td>
			</tr>

			<tr>
				<td>Harga</td>
				<td>:</td>
				<td><input type="number" min="0" name="harga" id="harga"></td>	
			</tr>

			<tr>
				<td>Warna Kendaraan</td>
				<td>:</td>
				<td><input type="color" name="color" id="color"></td>
			</tr>

			<table>
				<tr>
					<input type="submit" name="cmd" id="cmd" value="save">
					<input type="hidden" name="namalama" id="namalama">
				</tr>
			</table>
		</table>
	</form>
	<table>
		<tr bgcolor="#02ed0a" align="center">
			<th>No</th>
			<th>Nama Pemilik</th>
			<th>Jenis Kendaraan</th>
			<th>Tanggal Beli</th>
			<th>Harga</th>
			<th>Warna Kendaraan</th>
			<th colspan="3">Action</th>
		</tr>

		<?php
			include "koneksi.php";


			$sql="select * from form1";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);

			for ($i=1; $i <=$num ; $i++) { 
				$result=mysqli_fetch_array($query);
				$nama=$result['nama'];
				$jenis=$result['jenis'];
				$tanggal=$result['tanggal'];
				$harga=$result['harga'];
				$color=$result['warna'];
		?>

		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $jenis; ?></td>
			<td><?php echo $tanggal; ?></td>
			<td><?php echo $harga ?></td>
			<td><?php echo $color; ?><td bgcolor="<?php echo"$color"?>" style="width: 30px;"></td></td>
			<td><input type="submit" value="delete" onclick="del(<?php echo "'$nama'"?>)"></td>
			<td><input type="submit" value="update" onclick="upd(<?php echo "'$nama','$jenis','$tanggal','$harga','$color'"?>)"></td>
		</tr>
		<?php
	}
		?>
	</table>
</body>
</html>