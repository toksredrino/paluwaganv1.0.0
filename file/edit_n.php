 <?php
session_start();
include('../connection.php');
if(!isset($_SESSION['ACCOUNT'])) {
	header("location: ../login.php");
}
	
	

	
	$date = getdate();
	$today = $date['month']." ".$date['mday'].", ".$date['year']." - ".$date['weekday'];
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Paluwagan - Edit</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="../img/star-alt.png">
	<style>
	#top {
		background-attachment: fixed;
		position:fixed;
	}
	        .overlay{
            background:transparent url(../include/icons/login-likod.png) repeat top left;
            position:fixed;
            top:0px;
            bottom:0px;
            left:0px;
            right:0px;
            z-index:100;
        }
        .box{
            position:absolute;
            top:-500px;
            left:500px;
			padding: 20px;
			background-color: white;
			color: #000;
            -moz-border-radius: 20px;
            -webkit-border-radius:20px;
            -khtml-border-radius:20px;
            -moz-box-shadow: 0 1px 5px #009;
            -webkit-box-shadow: 0 1px 5px #009;
            z-index:101;

        }
       .box h1{
			border-bottom: 1px dashed #009;
			margin: -20px -20px 0px -20px;
		padding: 10px;
		background-color: white;
		color: #000;
		-moz-border-radius: 20px 20px 0px 0px;
		-webkit-border-top-left-radius: 20px;
		-webkit-border-top-right-radius: 20px;
		-khtml-border-top-left-radius: 20px;
		-khtml-border-top-right-radius: 20px;
		font-family: "Times New Roman", Times, serif;
        }
        a.boxclose{
            float:right;
            width:26px;
            height:26px;
            background:transparent url(../include/icons/login-cancel.png) repeat top left;
            margin-top:-30px;
            margin-right:-30px;
            cursor:pointer;
        }
 a.activator{

            cursor:pointer;
        }
		#bo {
			padding-top: 15px;
			background-color: #D4EAFF;
			opacity: 0.80;
			width: 200px;
			height: 50px;
			position:absolute;
			top: 2px;
			left: 760px;
			border-radius: 10px;
			text-align: center;
		}
		#bo1 {
			padding: 15px;
			background-color: #D4EAFF;
			opacity: 0.80;
			width: 200px;
			height: 50px;
			position:absolute;
			top: 2px;
			left: 970px;
			border-radius: 10px;
			text-align: center;
		}
		
		#boo {
			padding-top: 10px;
			padding: 10px;
			background-color: #D4EAFF;
			opacity: 0.80;
			width: 40px;
			height: 50px;
			position:absolute;
			top: 2px;
			left: 1300px;
			border-radius: 10px;
		}
		
		#boo2 {
			padding-top: 10px;
			padding: 10px;
			background-color: #D4EAFF;
			opacity: 0.80;
			width: 45px;
			height: 50px;
			position:absolute;
			top: 2px;
			left: 1200px;
			border-radius: 10px;
		}
		
		#boo3 {
			padding-top: 15px;
			padding: 10px;
			background-color: #D4EAFF;
			opacity: 0.80;
			width: 45px;
			height: 50px;
			position:absolute;
			top: 2px;
			left: 1250px;
			border-radius: 10px;
		}
		#box3 {
			padding: 5px;
			background-color:  #D4EAFF;
			opacity: 0.80;
			width: 470px;
			height: 50px;
			position:absolute;
			top: 2px;
			left: 20px;
			border-radius: 10px;
			text-align: center;
		}
		#box1 {
			padding-top: 15px;
			background-color:  #D4EAFF;
			opacity: 0.80;
			width: 250px;
			height: 50px;
			position: relative;
			top: 2px;
			left: 500px;
			border-radius: 10px;
			text-align: center;
		}
		
		#box2 {
			padding: 10px;
			padding-top: 10px;
			padding-bottom: 10px;
		
			width: 1300px;
			height: 100%-10%;
			position: relative;
			top: 4px;
			left: -4px;
			border-radius: 5px;
			 margin: 0 auto;
		}
		input:hover {
			border: 1px solid black;
		}
		
		.tbl {
			 -moz-border-radius: 1px;
            -webkit-border-radius:1px;
            -khtml-border-radius:10px;
            -webkit-box-shadow: 0px 1px 0px #009;
				 opacity: 0.90;
		}
		
		.tbl th {
			background-color: #4D94FF;
			text-align: center;
			-moz-border-radius: 10px;
			border-top-left-radius: 25px;
			border-top-right-radius: 25px;
		}
		.tbl tr td {
			border-bottom: 1px solid gray;
			text-align: center;
			padding: 3px;
			 -webkit-box-shadow: 1px 0px 0px #009;
		}
		
		.tbl tr td {
			border: 1px solid gray;
			padding: 1px;
		}
		
		.tbl td {
			width: 45%;
		}
		
		.tbl tr {
			background-color: #D4EAFF;
		}
		
		tr.tda:hover {
			background-color: #4D94FF;
		}
		input {
			padding-left: 10px;
			text-align: center;
			border-bottom: 1px solid gray;
		}
		#submit {
			border: 1px solid gray;
		}
		
	</style>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script>
		$(document).ready(function(){
				$( ".tda:odd" ).css( "background-color", "skyblue" ).mouseover(function() {
					$(this).css("background",'#4D94FF').mouseout(function() {
						$(this).css( "background-color", "skyblue" );
					});
				});
		});
	</script>


</head>

<body>
<?php
$d = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("y"));
$date = date("Y-m-d", $d);
$min = 10;

$qf = mysql_query("SELECT * FROM total_today");
$fetch = mysql_fetch_assoc($qf);
$current = $fetch['date'];
$today_total = $fetch['today_total'];
if(mysql_num_rows($qf)==0) {
	$in = mysql_query("INSERT INTO total_today VALUES('','$date','$min')");
}
if($date!=$current) {
	
	$to = $min + $today_total;
	$ins = mysql_query("UPDATE total_today SET date='$date', today_total='$to' WHERE today_id='1'");
	echo '<meta http-equiv="refresh" content="0; url= index.php" />';
}
?>
 <div class="overlay" id="overlay" style="display:none;"></div>
 <div class="box" id="box">
            <a class="boxclose" id="boxclose" href="edit.php"></a>
           <center> <h1>Edit</h1></center>
            <div class="tables">
			<p>
            <form method="post">
			
                <table width="300" cellspacing="5" >
                  <tr>
				  <td colspan="2"><input type="text" id="amount" name="name" maxlength="7" placeholder="Name: (max 7 letters)" autocomplete="off" onblur="checkk();"></td>
					<td colspan="2"><input type="submit" id="submit" name="go" class='btn btn-light' value="save"></td>
                  </tr>
                </table>
			
  </form>
            </p>
			</div>
</div>

<?php

$id = $_GET['id'];

if(isset($_POST['go'])) {
	
	$name = $_POST['name'];
	
	if(!empty($name)) {
			$up = mysql_query("UPDATE efg SET name='$name' WHERE id='$id' ");
	
	echo '<meta http-equiv="refresh" content="0; url= edit.php" />';
	} else {
		echo'<script>alert("Enter in the field!");</script>';
	}
}
?>
 <script type="text/javascript">
		
         $(function() {
                                   $('#overlay').fadeIn('fast',function(){
                        $('#box').animate({'top':'200px'},500);
                    });
                });
                $('#boxclose').click(function(){
                    $('#box').animate({'top':'-300px'},500,function(){
                        $('#overlay').fadeOut('fast');
                    });
                });

         		 
				 
        </script>

<header id="top" class="header">
	<div id="bo">
		<?php
			$q = mysql_query("SELECT COUNT(id) as stud FROM efg");
			$m = mysql_fetch_array($q);
		?>
		<p>Bilang kan kaintra: <strong>(<?php echo $m['stud']; ?>)</strong></p>
	</div>
	
	<div id="bo1">
	<?php
			$f = mysql_query("SELECT SUM(total) as s FROM efg");
            $ffg = mysql_query("SELECT * FROM efg");
			$b = mysql_fetch_array($f);
		?>
		<p>Total na ipon: <strong>(&#8369 <?php if(mysql_num_rows($ffg)==0) {
            echo 0;
        } else {
            echo $b['s']; 
        }
        ?>)</strong></p>
	</div>
	<a href="index.php">
	<div id="boo2">
		<img src='../img/sign-left.png' title="Back"/>
	</div>
</a>
<a href="">
	<div id="boo3">
		<img src='../img/cog.png' title="Edit"/>
	</div>
	</a>
	<a id="logout" href="lout.php">
	<div id="boo">
		<img src='../img/signout.png' title="Logout"/>
	</div>
	</a>
	
	<div id="box3">
		<p>AS OF <?php echo $today?>. Dapat ang yaon na sa ipon: <strong>(&#8369 <?php echo $today_total; ?>)</strong> o higit pa</p>
	</div>
	<?php
			$f = mysql_query("SELECT * FROM rate");
			$b = mysql_fetch_array($f);
		?>
    
	<div id="box1">
		Rate: &#8369 <?php echo $b['rate']?> per day.
	</div>
    <div style="position: relative; left: 20px;">
        <img src="../img/sign-question.png" title="Press 'F5' if there is no changes"/>
    </div>
	<div id="box2">
		<table width="350" class="tbl">
		<table width="520" class="tbl" style="table-layout: fixed">
			<?php
				$qry = mysql_query("SELECT * FROM efg");
				
				if(mysql_num_rows($qry)==0) {
					echo "<tr class='tda'>
					<td colspan='6'> <strong>NO ENTRIES</strong> </td></tr>";
				} else {
					while($r = mysql_fetch_assoc($qry)) {
					$id = $r['id'];
					echo "<tr class='tda'>
							<td width='300px'>".$r['name']."</td>
							<td><a href='edit_n.php?id=".$id."'><button class='btn btn-light' style='width: 171px;'>Edit</button></a></td>
							<td><a href='remove.php?id=".$id."'><button class='btn btn-light' style='width: 171px;'>Remove</button></a></td>
							</tr>";
				}
			}
			?>
        </table>
				<form action="" method="POST">
		<div style="position:absolute; top: 100px; left: 550px;">
			<?php
			$f = mysql_query("SELECT * FROM rate");
			$b = mysql_fetch_array($f);
		?>
		
			<p><font>Rate: </font>&#8369 <input type="text" name="rate" placeholder="<?php echo $b['rate']?>"> per day. &nbsp &nbsp &nbsp <input type='submit'   class='btn btn-light'  name='submit' value='Save'></p>
		
		</div>
		</form>
	</div>
</header>
</body>
</html>
