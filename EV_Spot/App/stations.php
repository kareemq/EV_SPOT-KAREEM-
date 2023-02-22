<?php include 'session_check.php';


$Latitude = $_GET['Latitude'];
$Longitude = $_GET['Longitude'];


?>
<html lang="en" dir="ltr">

<head>
    <?php include 'styles.php'; ?>
	
	
	
	
	




</head>

<body>
    <!-- site -->
    <div class="site">
        <!-- site__mobile-header -->
        <header class="site__mobile-header" >
            <div class="mobile-header" >
                <div class="container">
                    <div class="mobile-header__body">
                        <button class="mobile-header__menu-button" type="button">
                            <i class="fa fa-bars" aria-hidden="true" style="font-size:20px; color:#fff"></i>
                        </button>
                                                                    <h4 class="mobile-header__logo" style="color:#fff; margin-top:7px; margin-left:100px">EV Spot</h4>

                       
                       
                    </div>
                </div>
            </div>
        </header>
   
		
        <div class="site__body">
            
           
            
			
			
			
			<br><br>
			
			
<div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Nearest Stations</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                       <table>
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Phone Number</th>
                                                    <th>View Location</th>
                                                   
                                                    <th>Select</th>
                                                </tr>
                                            </thead>
                                            <tbody>



<?php
					$sql1 = mysqli_query($dbConn,"select * from stations where Status='Active' order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){
						
						$S_ID = $row1['ID'];
						$Name = $row1['Name'];
						$Phone_Number  = $row1['Phone_Number'];
						$S_Address  = $row1['Address'];
						$S_Longitude  = $row1['Longitude'];
						$S_Latitude  = $row1['Latitude'];
						
						
				  $unit = 'K';											
  $theta = $Longitude - $S_Longitude;
    $dist = sin(deg2rad($Latitude)) * sin(deg2rad($S_Latitude)) +  cos(deg2rad($Latitude)) * cos(deg2rad($S_Latitude)) * cos(deg2rad($theta));

  $dist = acos($dist);
  $dist = rad2deg($dist);
  $miles = $dist * 60 * 1.1515;
  $unit = strtoupper($unit);										
  $distance = ceil($miles * 1.609344);	
  
  
	
  
  if ($distance<10){
						   
						   
						
						?>




                                                <tr>
                                                    <td><?php echo $Name; ?></td>
                                                    <td><?php echo $Phone_Number; ?></td>
													
	                                                    <td>


				<?php echo "<a href='geo:".$S_Latitude.",".$S_Longitude."?q=".$S_Latitude.",".$S_Longitude."(".$S_Address.")' class='btn btn-primary' style='color:#fff'>OPEN GOOGLE MAP</a>"; ?>


 </td>
												
			
                                                    <td><a href="sendrequest.php?Latitude=<?php echo $Latitude; ?>&Longitude=<?php echo $Longitude; ?>&ID=<?php echo $S_ID; ?>&Type=Station" class="btn btn-primary">Select</a> </td>
                                                </tr>
                                    
<?php
}else{
	
	
	
	
}
					}
?>            

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-divider"></div>
                                
                            </div>
                        </div>


          
            
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
       
        <!-- site__footer / end -->
    </div>
    <!-- site / end -->
    <!-- mobile-menu -->
   <?php
	include 'mobile-menu.php';
	?>
    <!-- mobile-menu / end -->
    <!-- quickview-modal -->
   
  
    
    <!-- scripts -->
    <?php include 'scripts.php'; ?>
	
	
	
	
	
	
  <center>
 <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true" ><br><font style="font-size:15px;">Home</font></i></a>
  <a href="index.php"><i class="fa fa-chevron-circle-left" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Back</font></i></a>
  </ul>
  </center>


</body>

</html>