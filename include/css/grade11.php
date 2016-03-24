<?php
session_start();
if(!isset($_SESSION['ACCOUNTID'])){
header ("Location:log.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<head>
<title>Student Information System | Grade 9</title>
<link rel="shortcut icon"  href="../images/icons/amec_icon.jpg"/>
<link href="../templatemo_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="DataTables-1.9.3/media/js/jquery.js"></script>
<script type="text/javascript" src="DataTables-1.9.3/media/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="DataTables-1.9.3/extras/TableTools/media/js/ZeroClipboard.js"></script>
<script type="text/javascript" src="DataTables-1.9.3/extras/TableTools/media/js/TableTools.js"></script>
<style type="text/css" title="currentStyle">
	@import "DataTables-1.9.3/media/css/demo_page.css";
	@import "DataTables-1.9.3/media/css/demo_table_jui.css";
	@import "DataTables-1.9.3/examples/examples_support/themes/smoothness/jquery-ui-1.8.4.custom.css";
	@import "DataTables-1.9.3/extras/TableTools/media/css/TableTools_JUI.css";
</style>
<script type="text/javascript">
$(document).ready(function(){
	$('.table_layout1').dataTable({
		"sScrollY": 350,
		"bJQueryUI": true,
		"bFilter":true,
		"bSort":true,
		"sPaginationType": "full_numbers",
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]]
	});
	
	$('.table_layout2').dataTable({
		"sScrollY": 290,
		"bJQueryUI": true,
		"bFilter":true,
		"bSort":true,
		"sPaginationType": "full_numbers",
		"aLengthMenu": [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
		"aaSorting": [[0, 'desc']]
	});
});
</script>
</head><body><br/>
<div id="templatemo_wrapper">	
    <div id="templatemo_site_title_bar"><span class="fl_left"><a href="../index.php"><img src="images/sis.jpg" alt="" width="967" height="109" /></a></span></div> <!-- end of templatemo_site_title_bar -->
    <div id="templatemo_menu">
        <ul>
            <li><a href="grade7.php" title="Grade 7" >Grade 7</a></li>
            <li><a href="grade8.php" title="Grade 8">Grade 8</a></li>
            <li><a href="grade9.php" title="Grade 9"  >Grade 9</a></li>
            <li><a href="grade10.php" title="Grade 10">Grade 10</a></li>
            <li><a href="grade11.php" title="Junior High" class="current">Junior High</a></li>
            <li><a href="grade12.php" title="Senoir High">Senior High</a></li>
        </ul>
     </div>
     <div id="templatemo_menu">
     	<ul>
          <li><a href="org_club.php" title="Organizations and Clubs">Org/Club</a></li>
          <li><a href="kicked_out.php" title="Dropped and Kicked-out Students">Kicked Out</a></li>
          <li><a href="graduates.php" title="Alumni">Graduates</a></li>
           <li><a href="transferee.php" title="Transferee">Transferee</a></li>
          <li><a href="scholars.php" title="Scholar Stuents">Scholars</a></li>
        </ul>    	
    </div> <!-- end of templatemo_menu -->
  <br/><br/>
    <div id="main">  
    <form id="form1" name="form1" method="post" action="">
    <p align="center"><font color="#000066" size="+3" face="Tahoma, Geneva, sans-serif">GRADE 11 STUDENTS</font></p><br /><br /><font color="#000000" size="+1">
    
<table style="font-size:12px;" id="example"class="table_layout1">
<thead>
<th height="20">ID</th>
<th>Name</th>
<th></th>
<th></th>
</thead>
<tbody>
<?php
			include("connect.php");
			$y= mysql_query("SELECT * 
							FROM aes_year_level
							WHERE year_level_status =  'Grade 11'") or die(mysql_error());
			$year = mysql_fetch_assoc($y);
			$grad=  mysql_query("SELECT *
								FROM sis_student 
								WHERE year_level_id = '".$year['year_level_id']."'
								ORDER BY s_id ASC") or die(mysql_error());
			while($rr= mysql_fetch_assoc($grad)){
				echo '<tr>
					<td><p align="center"><b>'.$rr['s_id'].'</b></p></td>
          			<td><p align="center"><b>'.strtoupper($rr['s_lname']).", ".strtoupper($rr['s_fname'])." ".strtoupper($rr['s_mname']).'</b></p></td>
          			<td width="5"><a href="S_update.php?id='.$rr['s_id'].'"><p align="center"><input type="button" name="update_freshmen" id="update_freshmen" value="Update" /></p></a></td>
         			<td width="5"><a href="S_view.php?id='.$rr['s_id'].'"><input type="button" name="view_freshmen" id="update_freshmen2" value="View Profile" /></a></td>
        			</tr>';
			}?>
		</tbody>
    </table><br /></font>
    </form>
	</div> 
    <!-- end of templatemo_banner -->
    <div id="templatemo_content_top" align="left"><a href="../index_admin.php" title="Home"><img src="images/icons/home.png" alt="" width="48" height="48" /></a></div>
	
    <div id="templatemo_content" align="right">
    
        <div class="section_w940">
          <div class="cleaner">
            <div class="section_w940">
              <div class="cleaner"></div>
            </div>
          </div>
        </div>
    
    </div>
    <div id="templatemo_content_bottom">[System]<?php
        	$ac= mysql_query("SELECT * FROM accounts WHERE account_id='".$_SESSION['ACCOUNTID']."'") or die(mysql_error());
	$account_type = mysql_fetch_assoc($ac);
		
		$today = getdate();
		echo $today['month']." ".$today['mday'].", ".$today['year']." - ".$today['weekday'];
		?> | Logged in as : <?php echo ($account_type['account_type']); ?><?php echo $_SESSION['ACCOUNTID']; ?></div>
  </center>
	<div id="templatemo_footer">
	  <center>
          Copyright © 2013 BSIT-3B
	  </center>

	</div> <!-- end of footer -->
</div> <!-- end of wrapper -->
<div align=center></div></body>
</html>