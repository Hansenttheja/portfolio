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
		function del(id){
		location.href="save2.php?id="+id+"&cmd=delete";
	}
	function upd(id,nama,gender,tanggal,jam){
		var idlama = id;
		document.getElementById('id').value = id;
		document.getElementById('idlama').value=id;
		document.getElementById('nama').value = nama;
		if (gender=="male") {
			document.getElementById('jenis1').checked = true;

		}else {
			document.getElementById('jenis2').checked = true;
		}
		
		document.getElementById('tanggal').value = tanggal;	
		document.getElementById('jam').value = jam;	
		document.getElementById('cmd').innerHTML = "update";
		document.getElementById('cmd').value = "update";
		
	}
	</script>
	<form action="save2.php" method="GET">
		<table>
			<h1>Form Pemeriksaan Pasien	</h1>
			<tr>
				<td>ID</td>
				<td>:</td>
				<td><input type="number" name="id" id="id"></td>
			</tr>

			<tr>
				<td>Nama Pasien</td>
				<td>:</td>
				<td><input type="text"  name="nama" id="nama"></td>	
			</tr>


			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="gender" id="jenis1" 	 value="male">Laki-Laki 
					<input type="radio" name="gender" id="jenis2" value="female">Perempuan
					
				</td>
			</tr>

			<tr>
				<td>Tanggal periksa</td>
				<td>:</td>
				<td><input type="date" name="tanggal" id="tanggal"></td>
			</tr>

			

			<tr>
				<td>Jam Periksa</td>
				<td>:</td>
				<td><input type="time" name="jam" id="jam"></td>
			</tr>

			<table>
				<tr>
					<input type="submit" name="cmd" id="cmd" value="save">
					<input type="hidden" name="idlama" id="idlama">
				</tr>
			</table>
		</table>
	</form>
	<table>
		<tr bgcolor="#02ed0a" align="center">
			<th>No</th>
			<th>ID</th>
			<th>Nama Pasien</th>
			<th>Jenis Kelamin</th>
			<th>Tanggal Periksa</th>
			<th>Jam Periksa</th>
			<th colspan="2">Action</th>
		</tr>

		<?php
			include "koneksi.php";


			$sql="select * from form2";
			$query=mysqli_query($con,$sql);
			$num=mysqli_num_rows($query);

			for ($i=1; $i <=$num ; $i++) { 
				$result=mysqli_fetch_array($query);
				$id=$result['id'];
				$nama=$result['nama'];
				$gender=$result['gender'];
				$tanggal=$result['tanggal'];
				$jam=$result['jam'];
		?>

		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $id; ?></td>
			<td><?php echo $nama; ?></td>
			<td><?php echo $gender; ?></td>
			<td><?php echo $tanggal ?></td>
			<td><?php echo $jam; ?></td>
			<td><input type="submit" value="delete" onclick="del(<?php echo "'$id'"?>)"></td>
			<td><input type="submit" value="update" onclick="upd(<?php echo "$id,'$nama','$gender','$tanggal','$jam'"?>)"></td>
		</tr>
		<?php
	}
		?>
	</table>
</body>
</html>