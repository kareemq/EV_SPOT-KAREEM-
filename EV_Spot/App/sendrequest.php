<?php include 'session_check.php';


$ID = $_GET['ID'];
$Type = $_GET['Type'];

$Longitude = $_GET['Longitude'];
$Latitude = $_GET['Latitude'];

if(isset($_POST['Submit']))
{
	
	
$ID=mysqli_real_escape_string($dbConn,$_POST['ID']);
$Type=mysqli_real_escape_string($dbConn,$_POST['Type']);

$Longitude=mysqli_real_escape_string($dbConn,$_POST['Longitude']);
$Latitude=mysqli_real_escape_string($dbConn,$_POST['Latitude']);


$Name=mysqli_real_escape_string($dbConn,$_POST['Name']);
$Phone_Number=mysqli_real_escape_string($dbConn,$_POST['Phone_Number']);
$Car_Type=mysqli_real_escape_string($dbConn,$_POST['Car_Type']);
$Car_Model=mysqli_real_escape_string($dbConn,$_POST['Car_Model']);
$Charging_Type=mysqli_real_escape_string($dbConn,$_POST['Charging_Type']);
$Payment_Type=mysqli_real_escape_string($dbConn,$_POST['Payment_Type']);



	$insert = mysqli_query($dbConn,"insert into requests (EP_ID,EP_Type,Name,Phone_Number,Longitude,Latitude,Car_Type,Car_Model,Charging_Type,Payment_Type,Status) values
 ('$ID','$Type','$Longitude','$Latitude','$Name','$Phone_Number','$Car_Type','$Car_Model','$Charging_Type','$Payment_Type','Pending')");


echo "<script language='JavaScript'>
			  alert ('New Request Has Been Sent Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='index.php';
        </script>";

}

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
                                                                    <h4 class="mobile-header__logo" style="color:#fff; margin-top:7px; margin-left:105">JU SAD</h4>

                       
                       
                    </div>
                </div>
            </div>
        </header>
   
		
        <div class="site__body">
            
           
            
			
			
			
			
            <div class="block-space block-space--layout--after-header"></div>
            <div class="block">
                <div class="container container--max--xl">
                    <div class="row">
                       
                         <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Send Request</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="row no-gutters">
									
									
									
				
				

				
				
                                        <div class="col-12 col-lg-7 col-xl-6">
										                <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

										<form method="post" action="sendrequest.php?Latitude=<?php echo $Latitude; ?>&Longitude=<?php echo $Longitude; ?>&Type=<?php echo $Type; ?>&ID=<?php echo $ID; ?>" enctype="multipart/form-data">
										





				
								<input type="hidden" name="ID" value="<?php echo $ID; ?>"/>
								<input type="hidden" name="Type" value="<?php echo $Type; ?>"/>
								<input type="hidden" name="Longitude" value="<?php echo $Longitude; ?>"/>
								<input type="hidden" name="Latitude" value="<?php echo $Latitude; ?>"/>
				
                                            <div class="form-group">
                                                <label >Name</label>
                                                <input type="text" class="form-control" name="Name" required value="" placeholder="Name">
                                            </div>
											
											
											  <div class="form-group">
                                                <label >Phone Number</label>
                                                <input type="text" class="form-control" name="Phone_Number" required value="" placeholder="Phone Number">
                                            </div>
											
											
											
									<div class="form-group">
                                                <label >Car Type</label>
                                                <input type="text" class="form-control" name="Car_Type" required value="" placeholder="Car Type">
                                            </div>
											
					
					
					
											
											  <div class="form-group">
                                                <label >Car Model</label>
                                                <input type="text" class="form-control" name="Car_Model" required value="" placeholder="Car Model">
                                            </div>



											
											  <div class="form-group">
                                                <label >Charging Type</label>
                                                <input type="text" class="form-control" name="Charging_Type" required value="" placeholder="Charging Type">
                                            </div>



											
											  <div class="form-group">
                                                <label >Payment Type</label>
                                                <input type="text" class="form-control" name="Payment_Type" required value="" placeholder="Payment Type">
                                            </div>



											
										   
										   
										   
										   
                                            <div class="form-group mb-0">
                                               <center> <button class="btn btn-primary mt-3" type="submit" id="btnFetch" name="Submit">Send</button>
											   
											   
											   <script type="text/javascript">$(document).ready(function() {
$("#btnFetch").click(function() {
// disable button
$(this).prop("", true);
// add spinner to button
$(this).html(
'<i class="fa fa-circle-o-notch fa-spin"></i> loading'
);
});
}); </script>
											   
											   </center>
												
												
                                            </div>
											
											
											</form>
											
                                        </div>
										
										
										
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
	?>    <!-- mobile-menu / end -->
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