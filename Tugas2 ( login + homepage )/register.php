<!DOCTYPE html>
<html>
<head>
	<title></title>
<link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
<style type="text/css">
html{
	display: flex;
	justify-content: center;
	align-items: center;
	background-color: #00a6ff;
}		
.container{
	width: 500px;

	background-color: #1f9eff;
	border: 3px solid #0022ff;
	border-radius: 15px;
	padding: 10px;
}
input[type=text], select {
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
  padding: 12px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 15px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.container h1{
	font-family: 'Indie Flower', cursive;
	font-size: 45px;
	text-align: center;
}
label{
	font-family: 'Indie Flower', cursive;
	font-weight: bold;
	font-size: 35px;
}
#cmd{
	background-color: #0022ff;
	border:none;
	border-radius: 30px;
	color: white;
	font-family: 'Indie Flower', cursive;
	font-weight: bold;
	font-size: 30px;
	margin-left: 160px;
	padding: 10px 30px;
}
.login{
	background-color: #0022ff;
	border:none;
	border-radius: 30px;
	color: white;
	font-family: 'Indie Flower', cursive;
	font-weight: bold;
	font-size: 30px;
	margin-left: 200px;
	margin-top: 20px;
	padding: 10px 30px;
}
</style>
</head>
<body>
<form action="regis.php" method="post">
		<div class="container">
			<h1>Register</h1>

				<div class="isi">

					<div class="username">
						<label>Username : </label><br>
						<input type="text" name="username" id="username" placeholder="Input Your Username">
					</div>

					<div class="password">
						<label>Password : </label><br>
						<input type="password" name="password" id="password" placeholder="Input Your Password">
					</div>

					<div class="email">
						<label>Email : </label><br>
						<input type="email" name="email" id="email" placeholder="Input Your Email">
					</div>

				</div>
				<button value="save" name="cmd" id="cmd">register</button>				
		</div>
</form>
<button onclick="window.location.href='/AIJ/Tugas2%20(%20login%20+%20homepage%20)/index.php'" class="login">Login</button>
</body>
</html>