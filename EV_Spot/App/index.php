<?php
session_start();

include 'includes/config.php';
include 'session_check.php';







if(isset($_POST['Submit1']))
{
	
	

$Longitude=mysqli_real_escape_string($dbConn,$_POST['Longitude']);
$Latitude=mysqli_real_escape_string($dbConn,$_POST['Latitude']);






	echo '<script language="JavaScript">
            document.location="providers.php?Longitude='.$Longitude.'&Latitude='.$Latitude.'";
          </script>';


}



if(isset($_POST['Submit2']))
{
	
	

$Longitude=mysqli_real_escape_string($dbConn,$_POST['Longitude']);
$Latitude=mysqli_real_escape_string($dbConn,$_POST['Latitude']);






	echo '<script language="JavaScript">
            document.location="stations.php?Longitude='.$Longitude.'&Latitude='.$Latitude.'";
          </script>';


}




?>
<html  lang="en" dir="ltr">

<head>

<?php
include 'styles.php';
?>  

</head>


 <body onLoad="getLocation();">
        
		
		<script>
var x = document.getElementById("demo");

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition);
    } else { 
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
}

function showPosition(position) {
  
	
	 document.getElementById('long').value = position.coords.longitude;
         document.getElementById('lat').value = position.coords.latitude
		 
		 
		 
		 
}
</script>
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
   
		
        <div class="site__body" style="margin-top:42px">
            <div class="block block-slideshow">
                <div class="container">
                    <div class="block-slideshow__carousel">
                        <div class="owl-carousel">
                            <a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('images/final/slider-1.png')"></span>
                            </a>
                           <a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('images/final/slider-2.png')"></span>
                                                             

                            </a>
                            <a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('images/final/slider-1.png')"></span>
                                                               

                            </a>
							
							
							<a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('images/final/slider-2.png')"></span>
                                                               

                            </a>
							
							
							
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-brands block-brands--layout--columns-8-full">
                <div class="container">
                    <center>
					<br><br><br>
					<br><br>

	<ul class="block-brands__list" style="justify-content: center;
  display: flex;">
                    
                     
                <form style="height:auto !important" action="index.php" method="post">

  <INPUT TYPE="hidden" NAME="Longitude" ID="long" VALUE="">
					<INPUT TYPE="hidden" NAME="Latitude" ID="lat" VALUE="">
	 
			
                   <li class="block-brands__item" style="display:inline-block">
                           <button type="submit" name="Submit1" class="block-brands__item-link"> 
                                <img src="images/final/c1.png" alt="">
																<h5>Providers</h5>

                            </button>
                        </li>


 <li class="block-brands__item" style="display:inline-block">
                           <button type="submit" name="Submit2" class="block-brands__item-link"> 
                                <img src="images/final/c2.png" alt="">
																<h5>Stations</h5>

                            </button>
                        </li>

</form>



</ul>



                   
						             
					</center>
					
                </div>
            </div>
            
          
            
        </div>

    </div>

    <?php
	include 'mobile-menu.php';
	?>

    <?php
	include 'scripts.php';
	?>

</body>
</html>