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
   <title>Paluwagan - Logout</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="../img/star-alt.png">
	<style>
	#top {
		background-attachment: fixed;
		padding-bottom: 20px;
		position:fixed;
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
			padding-top: 10px;
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
		#box {
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
			width: 1320px;
			height: 100%-10%;
			position: relative;
			top: 4px;
			left: -5px;
			border-radius: 10px;
			 margin: 0 auto;
		}
		input {
			border-radius: 5px;
			font-size: 10px;
			background-color: white;
		}
		input:hover {
			border: 1px solid black;
		}
		
		.tbl {
			table-layout: fixed;
			 -moz-border-radius: 1px;
            -webkit-border-radius:1px;
            -khtml-border-radius:10px;
            -webkit-box-shadow: 0px 1px 0px #009;
				 opacity: 0.90;
				  font-size: 10px;
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
		
		.tbl tr {
			background-color: #D4EAFF;
		}
		
		tr.tda:hover {
			background-color: #4D94FF;
				 opacity: 0.90;
		}
		
		.back {
			 background:transparent url(../include/icons/login-likod.png) repeat top left;
            position:fixed;
            top:0px;
            bottom:0px;
            left:0px;
            right:0px;
            z-index:100;
		}
		
		.boxin {
			background-color: white;
			position: absolute;
			width: 400px;
			height: 100px;
			left: 500px;
			-moz-border-radius: 20px;
            -webkit-border-radius:20px;
            -khtml-border-radius:20px;
            -moz-box-shadow: 0 1px 5px #009;
            -webkit-box-shadow: 0 1px 5px #009;
            z-index:101;
			text-align: center;
		}
		
		#h:hover {
			background-color:#D4EAFF;
		}
		
		.tbl .bttn {
			text-size: 20px;
		}
		<!--animate({'top':'200px'})-->
	</style>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script>
		$(document).ready(function(){
				$( ".tda:odd" ).css( "background-color", "skyblue" ).mouseover(function() {
					$(this).css("background",'#4D94FF').mouseout(function() {
						$(this).css( "background-color", "skyblue" );
					});
				});
				
				$('#back').fadeIn('fast', function() {
					$('#boxin').animate({'top':'200px'});
				});
		});
	</script>
<script>
function reloadPage()
  {
  location.reload()
  }
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
	<a href="add.php">
	<div id="boo2">
		<img src='../img/sign-add.png' title="Add"/>
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
	
	<div id="back" class="back" style='display:none'></div>
	<div id="boxin" class="boxin">
		<h3>Are you sure you want to Log Out?</h3>
		<a href="index.php"><button class='btn btn-light' style='border: 1px solid gray; border-radius: 5px; background-color: #D4EAFF '>Cancel</button></a>
		<a href="../logout.php"><button class='btn btn-light' id="h" style='border: 1px solid gray; border-radius: 5px;'>Ok</button></a>
		
	</div>
	
	<div id="box">
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
		<table width="1299" class="tbl">
			<tr>
				<th>PANGARAN</th>
				<th>KUNG PIRA PA ANG KULANG</th>
				<th>ADVANCE PAYMENT</th>
				<th>DAY(S)</th>
				<th>TOTAL NA NAIPON</th>
				<th colspan="2">ACTION</th>
			</tr>
			<?php
				$qry = mysql_query("SELECT * FROM efg");
				
				if(mysql_num_rows($qry)==0) {
					echo "<tr class='tda'>
					<td colspan='6'> <strong>NO ENTRIES</strong> </td></tr>";
				} else {
					while($r = mysql_fetch_assoc($qry)) {
					$id = $r['id'];
					$kulang = $r['kulang'];
					$advance = $r['advance'];
					
					$day_ad = $advance / 10;
					
					if($date!=$current) {

						$qfg = mysql_query("SELECT * FROM efg WHERE id='$id' ");
						$feh = mysql_fetch_assoc($qfg);
						$kulang = $feh['kulang'];
						$adv = $feh['advance'];
						
						if($adv>=$min) {
							$adv = $adv - $min;
							$unina = mysql_query("UPDATE efg SET advance='$adv' WHERE id='$id'");
						} else {
							$dagdag = $kulang + $min;
							$inss = mysql_query("UPDATE efg SET kulang='$dagdag' WHERE id='$id'");
						}			
					}
					echo "<tr class='tda'>
							<td width='300px'>".$r['name']."</td>
							<td>".$kulang."</td>
							<td width='200px'>".$advance."</td>
							<td width='100px'>".$day_ad." day(s)</td>
							<td width='300px'>".$r['total']."</td>
							<td><a href='adda.php?id=".$id."'><input type='submit' class='bttn' name='add' value='Deposit'></a></td>
							<td><a href='addv.php?id=".$id."'><input type='submit' class='bttn' name='add' value='Withdraw'></a></td>
							</tr>";
				}
			}
				
				
			?>
        </table>
		
	</div>	
</header>
</body>
</html>
