<?php include 'session_check.php';









if(isset($_POST['Submit']))
{
	
	
	
	
	
$P_ID=mysqli_real_escape_string($dbConn,$_POST['P_ID']);
$Old_Password=mysqli_real_escape_string($dbConn,$_POST['Old_Password']);
$New_Password=mysqli_real_escape_string($dbConn,$_POST['New_Password']);
$Password=mysqli_real_escape_string($dbConn,$_POST['Password']);
$Confirm_Password=mysqli_real_escape_string($dbConn,$_POST['Confirm_Password']);


		
		
	if ($Old_Password==$Password){
		
		
		if ($New_Password==$Confirm_Password){
			
			
		
		$update = mysqli_query($dbConn,"update providers set Password='$New_Password' where ID='$P_ID'");
		
	
		
		
	
		$Error = 'Password Has Been Updated !';

	
		}else{
			
			
		$Error = 'Sorry ! New Password AND Its Confirm Not Matched !';
		
			
			
		}
	

	
	}else{
		
	$Error = 'Sorry ! Old Password Is Not Correct !';
		
	
	}
		
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
                                                                    <h4 class="mobile-header__logo" style="color:#fff; margin-top:7px; margin-left:100px">EV Spot</h4>

                       
                       
                    </div>
                </div>
            </div>
        </header>
   
		
        <div class="site__body">
            
           
            
			
			<br>
			
			
			
            <div class="block-space block-space--layout--after-header"></div>
            <div class="block">
                <div class="container container--max--xl">
                    <div class="row">
                        <div class="col-12 col-lg-3 d-flex">
                            <div class="account-nav flex-grow-1">
                                <h4 class="account-nav__title">Navigation</h4>
                                <ul class="account-nav__list">
                                    <li class="account-nav__item   ">
                                        <a href="myaccount.php">My Account</a>
                                    </li>
                                 
                                    <li class="account-nav__item account-nav__item--active">
                                        <a href="change-password.php">Change Password</a>
                                    </li>
									
									
									
									
                                    <li class="account-nav__divider" role="presentation"></li>
                                    <li class="account-nav__item ">
                                        <a href="logout.php">Logout</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                         <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Change Password</h5>
                                </div>
                                <div class="card-divider"></div>
                                <div class="card-body card-body--padding--2">
                                    <div class="row no-gutters">
									
									
									
				
				

				
				
                                        <div class="col-12 col-lg-7 col-xl-6">
										
										<form method="post" action="change-password.php">
										
										<input type="hidden" name="P_ID" value="<?php echo $P_ID; ?>"/>
										<input type="hidden" name="Password" value="<?php echo $Password; ?>"/>
				
				
				
                                            <div class="form-group">
                                                <label for="password-current">Current Password</label>
                                                <input type="password" class="form-control" id="password-current" name="Old_Password" placeholder="Current Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="password-new">New Password</label>
                                                <input type="password" class="form-control" id="password-new" name="New_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Contain At Least One Number And One Uppercase And Lowercase Letter, And At Least 8 Or More Characters" placeholder="New Password">
					<center><span style="font-size: 12px; color:red">Note: Password Must Contain At Least One Number And One Uppercase And Lowercase Letter, And At Least 8 Or More Characters</span></center>
                                           
										   </div>
                                            <div class="form-group">
                                                <label for="password-confirm">Reenter New Password</label>
                                                <input type="password" class="form-control" id="password-confirm" name="Confirm_Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Contain At Least One Number And One Uppercase And Lowercase Letter, And At Least 8 Or More Characters" placeholder="Reenter New Password">
                                            </div>
                                            <div class="form-group mb-0">
                                               <center> <button class="btn btn-primary mt-3" type="submit" name="Submit">Change</button></center>
												
												
                                            </div>
											<br><br>
																<center><font style='color:red'><?php echo $Error; ?></font></center>

											
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
	?>
    <!-- mobile-menu / end -->
    <!-- quickview-modal -->
   
  
    
    <!-- scripts -->
    <?php include 'scripts.php'; ?>
	
	
	
	
	
	
  <center>
 <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true" ><br><font style="font-size:15px;">Home</font></i></a>
  <a href="myaccount.php"><i class="fa fa-user" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Profile</font></i></a>
  <a href="myaccount.php"><i class="fa fa-chevron-circle-left" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Back</font></i></a>
  </ul>
  </center>


</body>

</html>