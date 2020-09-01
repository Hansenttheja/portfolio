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
		location.href="save3.php?nama="+nama+"&cmd=delete";
	}
	function upd(nama,email,telp,berat,tinggi){
		document.getElementById('nama').value = nama;
		document.getElementById('email').value = email;
		document.getElementById('telp').value = telp;	
		if (berat=="50-59") {
			document.getElementById('berat1').checked = true;

		}else if (berat=="60-69")  {
			document.getElementById('berat2').checked = true;
		}else if (berat=="70-79") {
			document.getElementById('berat3').checked = true;
		}else if (berat=="80-89") {
			document.getElementById('berat4').checked = true;
		}else{
			document.getElementById('berat5').checked = true;
		}
		
		document.getElementById('tinggi').value = tinggi;	
		document.getElementById('cmd').innerHTML = "update";
		document.getElementById('cmd').value = "update";
		
	}
	</script>
	<form action="save3.php" method="GET">
		<table>
			<h1>Form Membership Gym</h1>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td>:</td>
				<td><input type="email"  name="email" id="email"></td>	
			</tr>

			<tr>
				<td>Telp</td>
				<td>:</td>
				<td><input type="tel" name="telp" id="telp"></td>
			</tr>

			<tr>
				<td>Range Berat Badan</td>
				<td>:</td>
				<td><input type="radio" name="berat" id="berat1" 	 value="50-59">50-59 
					<input type="radio" name="berat" id="berat2" value="60-69">60-69
					<input type="radio" name="berat" id="berat3" value="70-79">70-79
					<input type="radio" name="berat" id="berat4" value="80-89">80-89
					<input type="radio" name="berat" id="berat5" value="90-99">90-99
					
				</td>
			</tr>

			<tr>
				<td>Tinggi Badan</td>
				<td>:</td>
				<td><input type="number" name="tinggi" id="tinggi"></td>
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
			<th>Nama</th>
			<th>Email</th>
			<th>Telp</th>
			<th>Range Berat Badan</th>
			<th>Jam Periksa</th>
			<th colspan="2">Action</th>
		</tr>

		<?php
			include "koneksi.php";


			$sql="select * from form3";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);

			for ($i=1; $i <=$num ; $i++) { 
				$result=mysqli_fetch_array($query);
				$nama=$result['nama'];
				$email=$result['email'];
				$telp=$result['telp'];
				$berat=$result['berat'];
				$tinggi=$result['tinggi'];
		?>

		<tr>
			<?php echo $telp;?>
			<td><?php echo $i; ?></td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $email; ?></td>
			<td><?php echo $telp; ?></td>
			<td><?php echo $berat ?></td>
			<td><?php echo $tinggi; ?></td>
			<td><input type="submit" value="delete" onclick="del(<?php echo "'$nama'"?>)"></td>
			<td><input type="submit" value="update" onclick="upd(<?php echo "'$nama','$email','$telp','$berat','$tinggi'"?>)"></td>
		</tr>
		<?php
	}
		?>
	</table>
</body>
</html>