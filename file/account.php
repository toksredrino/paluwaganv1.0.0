<?php
	include('../connection.php');
	
	$error = '';
	if(isset($_POST['submit'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['password'];
		
		if(empty($username) && empty($password)) {
			$error = "Please put your Username and Password";
		} else {
			$insert = mysql_query("INSERT INTO account VALUES ('','$username','$password')");
			echo '<meta http-equiv="refresh" content="1; url= ../login.php" />';
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="../img/star-alt.png">
	<style>
		#box1 {
			padding: 10px;
			background-color: #D4EAFF;
			opacity: 0.60;
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
			opacity: 0.60;
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
		}
		.login #submit {
			position: absolute;
			left: 110px;
			top: 140px;	
		}
		.boxin {
			background:transparent url(include/icons/login-likod.png) repeat top left;
			position:fixed;
			 top:0px;
            bottom:0px;
            left:0px;
            right:0px;
            z-index:100;
			
		}
		.frm {
			background-color: #999999;
			opacity: 1.0px;
			width: 500px;
			height: 290px;
			position: absolute;
			top: 150px;
			left: 420px;
			border-radius: 5px;
			 z-index:101;
			 text-align: center;
			
		}
		.frm h1 {
			 padding: 10px;
			border-bottom: 1px solid gray;
		}
		
		.frm input {
			padding: 5px;
			border-radius: 5px;
		}
		
		 a.boxclose{
            position:absolute;
			top: 20px;
			right: 25px;
            width:26px;
            height:26px;
            background:transparent url(include/icons/login-cancel.png) repeat top left;
            margin-top:-30px;
            margin-right:-30px;
            cursor:pointer;
        }
	</style>
	<script type="text/javascript" src="../js/jquery.js">
		
	</script>
	
</head>

<body>
<!---->
<header id="top" class="header">
<div class="boxin" id="boxin" style=""><div>
<div class="frm" id="frm">
	<h1>Add account first!</h1>
		<form method="POST" action="account.php">
			USERNAME: <input type="text" name="username" autocomplete="off"><br/><br/>
			PASSWORD: <input type="password" name="password" id="password" onblur=""><br/><br/>
			<input type="submit" name="submit" id="submit" class="btn btn-light">
		</form>
</div>
<script type="text/javascript">
		$(document).ready(function(){
						
			$("#submit").click(function() {
				$("#frm").fadeOut(700);
			});
			
			$("#frm").animate({'top':'100px'},500);

		});
	</script>
<div class="he"><h1>LOGIN</h1></div>
	<div id="box1">
		<div class="login">
			<form action="" method="POST">
				Username: <input type="text" name="username"><br/><br/>
				Password:&nbsp <input type="password" name="password"><br/><br/><br/>
				<p><font color='red'><?php echo $error; ?><font></p>
				<input type="submit" name="submit" class="btn btn-light" id="submit">
			</form>
		</div>
	</div>	
</header>

</body>
</html>
