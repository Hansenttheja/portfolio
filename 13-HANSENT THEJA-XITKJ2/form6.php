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
input[type=tel], select {
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
		function del(nama){
		location.href="save6.php?nama="+nama+"&cmd=delete";
	}
	function upd(nama,tanggal,jam,jenis,lama,telp){
		document.getElementById('nama').value = nama;
		document.getElementById('tanggal').value = tanggal;	
		document.getElementById('jam').value = jam;
		if (jenis=="Karet Sintetis") {
			document.getElementById('jenis1').checked = true;
		}else if (jenis=="Rumput Sintetis")  {
			document.getElementById('jenis2').checked = true;
		}else if (jenjang=="Vinyl Roll") {
			document.getElementById('jenis3').checked = true;
		}else{
			document.getElementById('jenis4').checked = true;
		}
		document.getElementById('lama').value = lama;
		document.getElementById('telp').value = telp;				
		document.getElementById('cmd').innerHTML = "UPDATE";
		document.getElementById('cmd').value = "UPDATE";
		
	}
	</script>
	<form action="save6.php" method="GET">
		<table>
			<h1>Form Penyewaan Lapangan</h1>
			<tr>
				<td>Nama Penyewa</td>
				<td>:</td>
				<td><input type="text"  name="nama" id="nama"></td>	
			</tr>

			<tr>
				<td>Tanggal Sewa</td>
				<td>:</td>
				<td><input type="date" name="tanggal" id="tanggal"></td>
			</tr>

			<tr>
				<td>Jam Sewa</td>
				<td>:</td>
				<td><input type="time" name="jam" id="jam"></td>
			</tr>


			<tr>
				<td>Jenis Pelapis Lapangan</td>
				<td>:</td>
				<td>
					<input type="radio" name="jenis" id="jenis1" 	 value="Karet Sintetis">Karet Sintetis
					<input type="radio" name="jenis" id="jenis2" value="Rumput Sintetis">Rumput Sintetis
					<input type="radio" name="jenis" id="jenis3" value="Vinyl Roll">Vinyl Roll
					<input type="radio" name="jenis" id="jenis4" value="Interlock">Interlock
				</td>
			</tr>

			<tr>
				<td>Lama Sewa</td>
				<td>:</td>
				<td><input type="number" name="lama" id="lama"></td>
			</tr>

			<tr>
				<td>Telp</td>
				<td>:</td>
				<td><input type="tel" name="telp" id="telp"></td>
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
			<th>Nama Penyewa</th>
			<th>Tanggal Sewa</th>
			<th>Jam Sewa</th>
			<th>Jenis Pelapis Lapangan</th>
			<th>Lama Sewa</th>
			<th>Telp</th>
			<th colspan="2">Action</th>
		</tr>

		<?php
			include "koneksi.php";


			$sql="select * from form6";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);

			for ($i=1; $i <=$num ; $i++) { 
				$result=mysqli_fetch_array($query);
				$nama=$result['nama'];
				$tanggal=$result['tanggal'];
				$jam=$result['jam'];
				$jenis=$result['jenis'];
				$lama=$result['lama'];
				$telp=$result['telp'];

		?>

		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $tanggal; ?></td>
			<td><?php echo $jam; ?></td>
			<td><?php echo $jenis ?></td>
			<td><?php echo $lama; ?> Jam</td>
			<td><?php echo $telp; ?></td>
			<td><input type="submit" value="delete" onclick="del(<?php echo "'$nama'"?>)"></td>
			<td><input type="submit" value="update" onclick="upd(<?php echo "'$nama','$tanggal','$jam','$jenis','$lama','$telp'"?>)"></td>
		</tr>
		<?php
	}
		?>
	</table>
</body>
</html>