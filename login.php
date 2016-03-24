<?php
session_start();
include("connection.php");
$acc = mysql_query("SELECT * FROM account");

if(mysql_num_rows($acc)!=1) {
	header("location: file/account.php");
} else {
	header("login.php");
}
$error= '';
if(isset($_POST['submit'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$query = mysql_query("SELECT * FROM account WHERE username='$username' AND password='$password' ");
	
	if(mysql_num_rows($query)==1) {
		session_regenerate_id();
		$row = mysql_fetch_array($query);
		
		$_SESSION['ACCOUNT'] = $row['id'];
		
		header("location:file/index.php");
	} else {
		$error = "Username or Password Does Not Match!";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Paluwagan</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="img/star-alt.png">
	<style>
		#box1 {
			padding: 10px;
			background-color: #D4EAFF;

			width: 400px;
			height: 250px;
			position: absolute;
			top: 200px;
			left: 470px;
			border-bottom-left-radius: 10px;
			border-bottom-right-radius: 10px;
		}
		
		.he {
			position: absolute;
			top: 120px;
			left: 470px;
			background-color: white;
			width: 400px;
			height: 80px;
			text-align: center;
			padding: -10px;
			border-top-right-radius: 10px;
			border-top-left-radius: 10px;
		}
		
		.login {
			position: absolute;
			left: 70px;
			top: 40px;
		}
		.login input {
			padding: 5px;
			border-radius: 5px;
			border: 1px solid gray;
		}
		
		.login #submit {
			position: absolute;
			left: 110px;
			top: 140px;	
		}

		
	</style>
</head>

<body>
<header id="top" class="header">
	<div class="he"><h1>LOGIN</h1></div>
	<div id="box1">
		<div class="login">
			<form action="" method="POST">
				Username: <input type="text" name="username" autocomplete="off"><br/><br/>
				Password:&nbsp <input type="password" name="password"><br/><br/><br/>
				<input type="submit" name="submit" class="btn btn-light" id="submit">
				<p><font color="red"><?php echo $error; ?></font></p>
			</form>
		</div>
	</div>	
</header>
</body>
</html>
