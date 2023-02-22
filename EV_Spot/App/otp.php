<?php
include 'session_check.php';
include 'includes/config.php';


session_start();


	$Error ='';

	
	
$DID = $_GET['DID'];
$user_ID = $_GET['user_ID'];





$Verification_Code = $_GET['Verification_Code'];
$P_ID = $_GET['P_ID'];
$Phone_Number = $_GET['Phone_Number'];


if(isset($_POST['Submit1']))
{


$Verification_Code = mysqli_real_escape_string($dbConn,$_POST['Verification_Code']);
$P_ID = mysqli_real_escape_string($dbConn,$_POST['P_ID']);
$Code = mysqli_real_escape_string($dbConn,$_POST['Code']);





if ($Code==$Verification_Code){
	
	$query = mysqli_query($dbConn,"update providers set Status='Wait Approval' where ID='$P_ID'"); 



	$Error = 'Verification Code Confirmed ! Wait Approval From Adminiistrator !';




/*
	$_SESSION['P_Log'] = $U_ID;

	echo '<script language="JavaScript">
            document.location="Users/";
        </script>';
*/	
	
}else{
	
	
	$Error = 'Error ! Verification Code Is Not Correct !';

}



}







if(isset($_POST['Submit2']))
{


$Verification_Code = mysqli_real_escape_string($dbConn,$_POST['Verification_Code']);
$U_ID = mysqli_real_escape_string($dbConn,$_POST['U_ID']);
$Code = mysqli_real_escape_string($dbConn,$_POST['Code']);
$Phone_Number = mysqli_real_escape_string($dbConn,$_POST['Phone_Number']);


$PN = '+962'.substr($Phone_Number, 1);






	$Error = 'Verification Code Resend !';



}

?>
<html lang="en" dir="ltr">

<head>
   <?php
include 'styles.php';
?>  
	
	
	
	




<style>
	
	
	
	input{
	color: #000;
}


input[type="text"]::placeholder { /* Firefox, Chrome, Opera */ 
    color: #848484 !important;
	text-align: center;
} 
  
input[type="text"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
    color: #848484 !important; 
	text-align: center;
} 
  
input[type="text"]::-ms-input-placeholder { /* Microsoft Edge */ 
    color: #848484 !important; 
	text-align: center;
} 


input[type="password"]::placeholder { /* Firefox, Chrome, Opera */ 
    color: #848484 !important;
	text-align: center;
} 
  
input[type="password"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
    color: #848484 !important; 
	text-align: center;
} 
  
input[type="password"]::-ms-input-placeholder { /* Microsoft Edge */ 
    color: #848484 !important; 
	text-align: center;
} 


input[type="email"]::placeholder { /* Firefox, Chrome, Opera */ 
    color: #848484 !important;
	text-align: center;
} 
  
input[type="email"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
    color: #848484 !important; 
	text-align: center;
} 
  
input[type="email"]::-ms-input-placeholder { /* Microsoft Edge */ 
    color: #848484 !important; 
	text-align: center;
}


input[type="tel"]::placeholder { /* Firefox, Chrome, Opera */ 
    color: #848484 !important;
	text-align: center;
} 
  
input[type="tel"]:-ms-input-placeholder { /* Internet Explorer 10-11 */ 
    color: #848484 !important; 
	text-align: center;
} 
  
input[type="tel"]::-ms-input-placeholder { /* Microsoft Edge */ 
    color: #848484 !important; 
	text-align: center;
}






.btn-primary {

	
	width: 100% !important;
    background: linear-gradient(to right, #67ae55, #67ae55) !important;
    background: -webkit-linear-gradient(to right, #67ae55, #67ae55) !important;
    padding: 0px 0 !important;
    border: none !important;
    border-radius: 5px !important;
    color: #fff !important;
    font-size: 20px !important;
	
	
	
}





.myButton {
	box-shadow:inset 0px 1px 0px 0px #04ACD8 !important;
	background:linear-gradient(to bottom, #04ACD8 5%, #4DBF67 100%) !important;
	background-color:#04ACD8 !important;
	border:1px solid #4DBF67 !important;
	display:inline-block !important;
	cursor:pointer !important;
	color:#ffffff !important;
	padding:6px 12px !important;
	border-radius: 5px !important;
	text-decoration:none !important;
}

.myButton:active {
	position:relative !important;
	top:1px !important;
}

</style>


<style>
.signin form, .signup form, .change-password form {
  width: 40%;
  margin: auto;
  padding: 30px;
}
@media (max-width: 768px) {
  .signin form, .signup form, .change-password form {
    width: 100%;
  }
}
.signin form > div, .signup form > div, .change-password form > div {
  margin-bottom: 20px;
}
.signin form input[type=text], .signup form input[type=text], .change-password form input[type=text], .signin form input[type=email], .signup form input[type=email], .change-password form input[type=email], .signin form input[type=tel], .signup form input[type=tel], .change-password form input[type=tel], .signin form input[type=password], .signup form input[type=password], .change-password form input[type=password] {
  width: 100%;
  background-color: #fff;
  border: 0px;
  border: 1px solid #c5c5c5;
  border-radius: 5px;
  padding: 10px;
}
.signin form input[type=text]::placeholder, .signup form input[type=text]::placeholder, .change-password form input[type=text]::placeholder, .signin form input[type=email]::placeholder, .signup form input[type=email]::placeholder, .change-password form input[type=email]::placeholder, .signin form input[type=tel]::placeholder, .signup form input[type=tel]::placeholder, .change-password form input[type=tel]::placeholder, .signin form input[type=password]::placeholder, .signup form input[type=password]::placeholder, .change-password form input[type=password]::placeholder {
  color: #fff;
  text-align: center;
}
.signin form input[type=submit], .signup form input[type=submit], .change-password form input[type=submit] {
  width: 100%;
  background: linear-gradient(to right, #04ACD8, #4DBF67);
  background: -webkit-linear-gradient(to right, #04ACD8, #4DBF67);
  padding: 0px 0;
  border: none;
  border-radius: 5px;
  color: #fff;
  font-size: 20px;
}
.signin form a, .signup form a, .change-password form a {
  color: #fff;
}


</style>


</head>

   <body >

    <!-- site -->
    <div class="site">
        <!-- site__mobile-header -->
        <header class="site__mobile-header" style="width: 100%, position: fixed; z-index: 1;">
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
			<br><br>
			
			
           			<section class="signin">

            <div class="uplogo" >
			<center>
                <img src="images/final/logo.png" width="40%" alt="image" >
			</center>
			</div>
            <div style="height:auto !important">
                
				
				
				<form method="post" action="otp.php?Verification_Code=<?php echo $Verification_Code; ?>&U_ID=<?php echo $U_ID; ?>&Phone_Number=<?php echo $Phone_Number; ?>">



  <INPUT TYPE="hidden" NAME="DID"  VALUE="<?php echo $DID; ?>">
	 	   <INPUT TYPE="hidden" NAME="user_ID"  VALUE="<?php echo $user_ID; ?>">

  <INPUT TYPE="hidden" NAME="Verification_Code"  VALUE="<?php echo $Verification_Code; ?>">
  <INPUT TYPE="hidden" NAME="U_ID"  VALUE="<?php echo $U_ID; ?>">
  <INPUT TYPE="hidden" NAME="Phone_Number"  VALUE="<?php echo $Phone_Number; ?>">



                    <div><input type="text" value="<?php echo isset($_POST['Code']) ? $_POST['Code'] : '' ?>" name="Code" placeholder="OTP" required></div>
					<center><div style="color:#000; font-size:11px; margin-top:5px "><font > We have sent high security one time code to your phone number. Please enter above and confirm.</font></div></center>

					</div>
					
					
  
  <center>


					
                    <div><input type="submit" name="Submit1" value="CONFIRM" class="myButton" style="border:1px solid #74ad5a; height:46px;"></div>
<br>
                    <div><input type="submit" name="Submit2" value="RESEND OTP" class="myButton" style="border:1px solid #74ad5a; height:46px;"></div>
										<span style="color:black"><?php echo $Error; ?></span></center>

                </form>
				
				
				
				
            </div>
			
		<br><br>

        </section>
			
           
            
          
            
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
   
  
   
 <!-- photoswipe / end -->
    <!-- scripts -->
      <?php
	include 'scripts.php';
	?>

	
	
			
  <center>
 <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true" ><br><font style="font-size:15px;">Home</font></i></a>
  <a href="index.php"><i class="fa fa-user" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Profile</font></i></a>
  <a href="signup.php"><i class="fa fa-chevron-circle-left" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Back</font></i></a>
  </ul>
  </center>


<script>
$(".toggle-password").click(function() {

  $(this).toggleClass("fa-eye fa-eye-slash");
  var input = $($(this).attr("toggle"));
  if (input.attr("type") == "password") {
    input.attr("type", "text");
  } else {
    input.attr("type", "password");
  }
});
</script>

</body>

</html>