 <?php
 include("../connection.php");
	if(isset($_GET['id'])) {
			$id = $_GET['id'];
	
			$del = mysql_query("DELETE FROM efg WHERE id='$id' ");
			
			echo '<meta http-equiv="refresh" content="0; url= edit.php" />';
	}
 ?>