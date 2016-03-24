 
 <!DOCTYPE html>
 <html>
 <head>
 <title>Transaction Log</title>
 <link rel="shortcut icon" href="../img/star-alt.png">
 <link href="../js/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../js/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../js/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../js/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	
  <link href="../js/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../js/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
 </head>
 <body>
  <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
										
                                            <center><th align="center">Name</th>
											<th align="center">Amount Entered</th>
                                            
											  <th align="center">Date</th>
											   <th align="center">Time</th>
											   <th align="center">Actions</th>
                                            </center>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
										include("../connection.php");
										
										$qry1 = mysql_query("SELECT * FROM transaction_log AS t1 INNER JOIN efg AS t2 ON t1.efg_id = t2.id ORDER BY t1.trans_id DESC");
										while($row1 = mysql_fetch_assoc($qry1)) {
											$added = explode("-",$row1['date_entered']);
											$mydate = mktime(0, 0, 0, $added[1], $added[2], $added[0]);
											$date = date('F d, Y', $mydate);
										?>
										
                                        <tr class="odd gradeX">
										
											<td align="center"><?php echo  $row1['name'];?></td>
                                            <td align="center">&#8369 <?php echo number_format($row1['amount_entered'],2);;?></td>
											
											<td align="center"><?php echo  $date;?></td>
											<td align="center"><?php echo  $row1['time_entered'];?></td>
											<td align="center"><?php echo  $row1['w_d'];?></td>
                                        </tr>
										<?php
										}
										?>
									</tbody>
								<table>
	 <script src="../js/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../js/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../../bower_components/metisMenu/dist/metisMenu.min.js"></script>
	<script src="../js/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../js/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	
	    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>
 </body>
 </html>
 

	
	


