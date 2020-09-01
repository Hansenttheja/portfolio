<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light&display=swap" rel="stylesheet">
<style type="text/css">
	html{
  background-color: #2d3436;
  background-image: linear-gradient(315deg, #2d3436 0%, #000000 74%);
  color: white;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd; 
  text-align: center;
  padding: 8px;
}

button{
	height: 35px;
	width: 120px;
	border-radius: 35px;
}

table{
	width: 100%;
	border-collapse: collapse;
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
  padding: 12px 20px;
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
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

#cmd {
  background: #222;
  height: 50px;
  min-width: 150px;
  border: none;
  border-radius: 10px;
  color: #eee;
  font-size: 40px;
  font-family: 'Cookie', cursive;
  position: relative;
  transition: 1s;
  -webkit-tap-highlight-color: transparent;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  padding-top: 5px;
  margin-left: 400px;
  margin-top: 30px;
  margin-bottom: 30px;
}
h1{
	font-family: 'Shadows Into Light', cursive;
	text-align: center;
	font-size: 45px;
	font-weight: bold;
}
</style>
<body>
	<script type="text/javascript">
		function del(id){
			location.href="save6.php?id="+id+"&cmd=delete";			
		}
		function upd(id,nama,jamkerja,status,email){
			document.getElementById('id').value=id;
			document.getElementById('nama').value=nama;
			document.getElementById('jamkerja').value=jamkerja;
			document.getElementById('email').value=email;
			if (status=="menikah") {
				document.getElementById('status1').checked=true;
			}else{
				document.getElementById('status2').checked=true;
			}
			document.getElementById('cmd').value="update";
		}
	</script>
	<style type="text/css"></style>
	<h1>Form Pekerja</h1>
	<form action="save6.php" method="GET">
		<table>
			<tr>
				<td>Id</td>
				<td>:</td>
				<td><input type="number" name="id" id="id"></td>
			</tr>

			<tr>
				<td>Nama Perkeja</td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama"></td>	
			</tr>

			<tr>
				<td>Waktu Mulai Kerja</td>
				<td>:</td>
				<td><input type="time" name="jamkerja" id="jamkerja"></td>
			</tr>

			<tr>
				<td>Status</td>
				<td>:</td>
				<td><input type="radio" name="status" id="status1" 		value="menikah"> Menikah
					<input type="radio" name="status" id="status2" value="belum menikah">Belum Menikah</td>
			</tr>

			<tr>
				<td>Email </td>
				<td>:</td>
				<td><input type="email" name="email" id="email"></td>
			</tr>
		</table>
		<table>
	<button name="cmd" id="cmd"	value="save">SAVE</button>
		</table>
	</form>

	<table>
		<tr>
			<th>No</th>
			<th>ID</th>
			<th>Nama Pekerja</th>
			<th>Waktu Mulai Kerja</th>
			<th>Status</th>
			<th>Email</th>
			<th colspan="2">Action</th>
		</tr>
		<?php
		include "koneksi.php";

		$sql="SELECT  * FROM form6";
		$query=mysqli_query($con,$sql);
		$rows= mysqli_num_rows($query);

		for ($i=1; $i <=$rows ; $i++) { 
			$result= mysqli_fetch_array($query);
			$id = $result['id'];
			$nama = $result['nama'];
			$jamkerja = $result['jamkerja'];
			$status = $result['status'];
			$email = $result['email'];
		
		?>
		<tr>
			<td><?php echo $i?></td>
			<td><?php echo $id?></td>
			<td><?php echo $nama?></td>
			<td><?php echo $jamkerja?></td>
			<td><?php echo $status?></td>
			<td><?php echo $email?></td>
			<td><button  value="delete" onclick="del('<?php echo $id;?>')">DELETE</button></td>
			<td><button  value="update"	onclick="upd(<?= "$id,'$nama','$jamkerja','$status','$email'" ;?>)">UPDATE</button></td>
		</tr>
		<?php
	}
		?>
	</table>
</body>
</html>