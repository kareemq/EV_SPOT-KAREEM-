<?php include 'session_check.php';




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
                                    <h5>My Requests</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-table">
                                    <div class="table-responsive-sm">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Phone Number</th>
                                                    <th>Car Type</th>
                                                    <th>Car Model</th>
                                                    <th>Charging Type</th>
                                                    <th>Payment Type</th>
                                                    <th>Status</th>
                                                    <th>Request Date / Time</th>
                                                    <th>Actions</th>
													
                                                </tr>
                                            </thead>
                                            <tbody>



<?php
					$sql1 = mysqli_query($dbConn,"select * from requests where EP_ID='$P_ID' AND EP_Type='Provider' order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){
						
						$R_ID = $row1['ID'];
						$Name = $row1['Name'];
						$Phone_Number = $row1['Phone_Number'];
						$Longitude = $row1['Longitude'];
						$Latitude = $row1['Latitude'];
						$Car_Type = $row1['Car_Type'];
						$Car_Model = $row1['Car_Model'];
						$Charging_Type = $row1['Charging_Type'];
						$Payment_Type = $row1['Payment_Type'];
						$Status = $row1['Status'];
						$Request_Date_Time = $row1['Request_Date_Time'];
					


						
						?>




                                                <tr>
                                                    <td><?php echo $Name; ?></td>
                                                    <td><?php echo $Phone_Number; ?></td>
                                                    <td><?php echo $Car_Type; ?></td>
                                                    <td><?php echo $Car_Model; ?></td>
                                                    <td><?php echo $Charging_Type; ?></td>
                                                    <td><?php echo $Payment_Type; ?></td>
                                                    <td><?php echo $Status; ?></td>
                                                    <td><?php echo $Add_Date_Time; ?></td>
                                                    <td>

<a href="acceptrequest.php?R_ID=<?php echo $R_ID; ?>" class="btn btn-primary">Accept</a>

<br>

<a href="rejectrequest.php?R_ID=<?php echo $R_ID; ?>" class="btn btn-warning">Reject</a>

<br>


<a href="deleterequest.php?R_ID=<?php echo $R_ID; ?>" class="btn btn-danger">Delete</a></td>

                                                </tr>
                                    
<?php
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
  <a href="myaccount.php"><i class="fa fa-user" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Profile</font></i></a>
  <a href="index.php"><i class="fa fa-chevron-circle-left" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Back</font></i></a>
  </ul>
  </center>


</body>

</html>