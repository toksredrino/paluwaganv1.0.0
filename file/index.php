<?php
session_start();
include('../connection.php');
if(!isset($_SESSION['ACCOUNT'])) {
	header("location: ../login.php");
}
	
	
	$date_ = getdate();
	$today = $date_['month']." ".$date_['mday'].", ".$date_['year']." - ".$date_['weekday'];
	// $dayt = date("Y-m-d"); 
	// echo $dayt;
	// $tim = date("h:i:s A",time());
	// echo "<br>";
	// echo $tim;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Paluwagan - Home</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/stylish-portfolio.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="shortcut icon" href="../img/star-alt.png">
	<style>
	#top {
		background-attachment: fixed;
		padding-bottom: 20px;

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
			left: -10px;
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
		}
		
		.tbl .bttn {
			text-size: 20px;
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
<script>
function reloadPage()
  {
  window.location.href="index.php";
  }
</script>

</head>

<body>
<?php
$sele = mysql_query("SELECT * FROM rate");
$lp = mysql_fetch_array($sele);
$d = mktime(date("H"),date("i"),date("s"),date("m"),date("d"),date("y"));
$date = date("Y-m-d", $d);
$min = $lp['rate'];

$qf = mysql_query("SELECT * FROM total_today");
$fetch = mysql_fetch_assoc($qf);
$current = $fetch['date'];
$today_total = $fetch['today_total'];
$totay_day = strtotime($date);
$prev_day = strtotime($current);
if(mysql_num_rows($qf)==0) {
	$in = mysql_query("INSERT INTO total_today VALUES('','$date','$min')");
}
if($date!=$current) {
    $sum_amm = ceil(abs($totay_day - $prev_day) / 86400);
	$to = ($sum_amm * $min) + $today_total;
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
<a href="edit.php">
	<div id="boo3">
		<img src='../img/cog.png' title="Edit"/>
	</div>
	</a>
	<a id="logout" href="lout.php">
	<div id="boo">
		<img src='../img/signout.png' title="Logout"/>
	</div>
	</a>
	
	<div id="box">
		<p>AS OF <?php echo $today?>. Dapat ang yaon na sa ipon: <strong>( &#8369 <?php echo  $today_total; ?>)</strong> o higit pa</p>
	</div>
	<?php
			$f = mysql_query("SELECT * FROM rate");
			$b = mysql_fetch_array($f);
            $im = "../img/sign-warning.png";
		?>
	<div id="box1">
		Rate: &#8369 <?php echo $b['rate']?> per day.
    </div>
    <div style="position: relative; left: 20px;">
        <img src="../img/sign-question.png" title="Press 'F5' three(3) times if there's something problem occured in the output of the 'KUNG PIRA PA ANG KULANG', 'ADVANCE PAYMENT', and 'TOTAL'."/>
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
					<td colspan='7'> <strong>NO ENTRIES</strong> </td></tr>";
				} else {
					while($r = mysql_fetch_assoc($qry)) {
                    $qrry = mysql_query("SELECT * FROM total_today");
                    $fetcc = mysql_fetch_array($qrry);
                    $gabos = $fetcc['today_total'];
					$id = $r['id'];
					$kulang = $r['kulang'];
					$advance = $r['advance'];
					$ipon = $r['total'];
                          
					$day_ad = $advance / 10;
                    
                    $po = $ipon - $kulang;
                    $opo = $gabos - $po;
                    $ho = $kulang - $opo;
                        
                    $ibna = mysql_query("UPDATE efg SET advance='$ho' WHERE id='$id'");
                    
					if($date!=$current) {

						$qfg = mysql_query("SELECT * FROM efg WHERE id='$id' ");
						$feh = mysql_fetch_assoc($qfg);
						$kulang = $feh['kulang'];
						$adv = $feh['advance'];
						$sum_amml = ceil(abs($totay_day - $prev_day) / 86400);
	                    $tol = $sum_amml * $min;
                        $adv = $adv - $tol;
                        $dagdag = $kulang + $tol;
                             if($adv>=$min) {
                                
                                $unina = mysql_query("UPDATE efg SET advance='$adv' WHERE id='$id'");
                            } else {
                                
                                $inss = mysql_query("UPDATE efg SET kulang='$dagdag' WHERE id='$id'");
                            }		  
							
					} else {
                        if($gabos>=$ipon) {
                             $loop1 = $gabos - $kulang;
                             $loop2 = $loop1 - $ipon;
                            $loop3 = $loop2 + $kulang;
                            $inss = mysql_query("UPDATE efg SET kulang='$loop3' WHERE id='$id'");
                        }
                        if($gabos!=$po) {
                            if($ho > 0) {
                              if($ipon <= 0) {
                                $inba = mysql_query("UPDATE efg SET advance='0' WHERE id='$id'");
                            }
                            else {
                                $ibna = mysql_query("UPDATE efg SET advance='$ho' WHERE id='$id'");
                                }   
                            }
                            else {
                                if($ipon <= 0) {
                                $inba = mysql_query("UPDATE efg SET advance='0' WHERE id='$id'");
                            }
                            else {
                                $ibna = mysql_query("UPDATE efg SET advance='0' WHERE id='$id'");
                            }  
                            }
                           
                             
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
