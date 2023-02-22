<?php
include 'session_check.php';
include 'includes/config.php';


session_start();


	$Error ='';

	
	
$DID = $_GET['DID'];
$user_ID = $_GET['user_ID'];











if(isset($_POST['Submit']))
{
	
	
	
	$DID=mysqli_real_escape_string($dbConn,$_POST['DID']);
$user_ID=mysqli_real_escape_string($dbConn,$_POST['user_ID']);




	




$Name=mysqli_real_escape_string($dbConn,$_POST['Name']);
$Phone_Number=mysqli_real_escape_string($dbConn,$_POST['Phone_Number']);
$Address=mysqli_real_escape_string($dbConn,$_POST['Address']);
$Longitude=mysqli_real_escape_string($dbConn,$_POST['Longitude']);
$Latitude=mysqli_real_escape_string($dbConn,$_POST['Latitude']);
$Password=md5(mysqli_real_escape_string($dbConn,$_POST['Password']));



$query = mysqli_query($dbConn,"SELECT * FROM providers WHERE Phone_Number='$Phone_Number'"); 
		
		

$Verification_Code = rand(1000,9999);


		
		
		
		

if (mysqli_num_rows($query)>0)
{

$Error = 'Sorry ! This Phone Number Is Already Exist !';




	
}else{


$insert = mysqli_query($dbConn,"insert into providers (Name,Phone_Number,Address,Longitude,Latitude,Password,Verification_Code,Status) values 
('$Name','$Phone_Number','$Address','$Longitude','$Latitude','$Password','$Verification_Code','Pending')");


}



$query = mysqli_query($dbConn,"SELECT * FROM providers WHERE Phone_Number='$Phone_Number'"); 
$row = mysqli_fetch_array($query);
$P_ID = $row['ID'];





echo '<script language="JavaScript">
            document.location="otp.php?Phone_Number='.$Phone_Number.'&P_ID='.$P_ID.'&Verification_Code='.$Verification_Code.'";
        </script>';









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


<style>
	



 #searchInput {
      background-color: #fff;
	  color: black;
      font-size: 15px;
      font-weight: 300;
      margin-left: 12px;
      padding: 0px 11px 0 13px;
      text-overflow: ellipsis;
      width: 70%;
	  margin-top: 12px;
    }
    #searchInput:focus {
      border-color: #4d90fe;
	  	  color: black;

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
			
           			<section class="signin">

            
            <div style="height:auto !important">
                
				
				
				<form method="post" action="signup.php">



  <INPUT TYPE="hidden" NAME="DID"  VALUE="<?php echo $DID; ?>">
	 	   <INPUT TYPE="hidden" NAME="user_ID"  VALUE="<?php echo $user_ID; ?>">




                    <div><input type="text" value="<?php echo isset($_POST['Name']) ? $_POST['Name'] : '' ?>" name="Name" placeholder="Name" required></div>



                 







                    <div><input   type="tel" name="Phone_Number" value="" placeholder="Phone Number" required>
					<center><div style="color:#000; font-size:11px; margin-top:5px "><font >Phone Number Should Be Start Without (0) In English</font></div></center>

					</div>



<div>
					<center><div style="color:#000; font-size:11px; margin-top:5px "><font >Select Your Address</font></div></center>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCC3rHaqjNvzdrImcm7vllRtDgbAT-AaY&callback=initMap&libraries=places"></script>

 							
											
											
				 <input id="searchInput" class="input-controls" type="text" style="color:balck" placeholder="Enter a location">
 <div class="map" id="map" style="border: 1px solid #ccc; border-radius: 4px;
     color:#000; width: 100%; height: 355px;"></div>
 <div class="form_area">
     <input type="hidden" name="Address" id="location">
     <input type="hidden" name="Latitude" value="35.91064767428481" id="lat">
     <input type="hidden" name="Longitude" value="31.953999096207333" id="lng">
 </div>
<script>
/* script */
function initialize() {
   var latlng = new google.maps.LatLng(31.953999096207333,35.91064767428481);
    var map = new google.maps.Map(document.getElementById('map'), {
      center: latlng,
      zoom: 13,
 zoomControl: true,
  mapTypeControl: false,
  scaleControl: false,
  streetViewControl: false,
  rotateControl: true,
  fullscreenControl: true
    });
    var marker = new google.maps.Marker({
      map: map,
      position: latlng,
      draggable: true,
      anchorPoint: new google.maps.Point(0, -29)
   });
    var input = document.getElementById('searchInput');
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
    var geocoder = new google.maps.Geocoder();
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);
    var infowindow = new google.maps.InfoWindow();   
    autocomplete.addListener('place_changed', function() {
        infowindow.close();
        marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }
  
        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);
        }
       
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);          
    
        bindDataToForm(place.formatted_address,place.geometry.location.lat(),place.geometry.location.lng());
        infowindow.setContent(place.formatted_address);
        infowindow.open(map, marker);
       
    });
    // this function will work on marker move event into map 
    google.maps.event.addListener(marker, 'dragend', function() {
        geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
        if (status == google.maps.GeocoderStatus.OK) {
          if (results[0]) {        
              bindDataToForm(results[0].formatted_address,marker.getPosition().lat(),marker.getPosition().lng());
              infowindow.setContent(results[0].formatted_address);
              infowindow.open(map, marker);
          }
        }
        });
    });
}
function bindDataToForm(address,lat,lng){
   document.getElementById('location').value = address;
   document.getElementById('lat').value = lat;
   document.getElementById('lng').value = lng;
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>


</div>
					
					
  
  
                    <div><input type="text" minlength="6" title="Password Should Contain And At Least 6 Or More Characters" value="<?php echo isset($_POST['Password']) ? $_POST['Password'] : '' ?>" name="Password" placeholder="Password" required>
					
					<center><div style="color:#000; font-size:11px; margin-top:5px "><font >Password Should Contain At Least 6 Or More Characters</font></div></center>


					</div>
                    <div><input type="submit" name="Submit" value="SIGN UP" class="myButton" style="border:1px solid #74ad5a; height:46px;"></div>
										<center><span style="color:black"><?php echo $Error; ?></span></center>

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
  <a href="index.php"><i class="fa fa-chevron-circle-left" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Back</font></i></a>
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