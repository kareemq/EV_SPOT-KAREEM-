<?php
include 'includes/config.php';
include 'session_check.php';
?>
<html lang="en" dir="ltr">

<head>
<?php
include 'styles.php';
?>
	
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
        
		<br><br>
        <div class="site__body">
            
			
			
			<div class="about">
                <div class="about__body">
                    <div class="about__image">
                        <div class="about__image-bg"></div>
                        <div class="decor about__image-decor decor--type--bottom">
                            <div class="decor__body">
                                <div class="decor__start"></div>
                                <div class="decor__end"></div>
                                <div class="decor__center"></div>
                            </div>
                        </div>
                    </div>
                    <div class="about__card">
                        <div class="about__card-signature">
                            <center><img src="images/final/logo.png" width="70%" alt=""></center>
                        </div>
						<br>
						<div class="about__card-text">
                            <p style="text-align:justify;">Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text Text  
						</p>
                        </div>
						
						




               
             
         
					</div>
                    
                </div>
            </div>
			
           
            
          
            
        </div>
     
    </div>
   
	<br><br>
       <?php
	include 'mobile-menu.php';
	?>
    
     <?php
	include 'scripts.php';
	?>

	
  <center>
  <ul class="nav" id="newdata2" style="visibility: <?php echo $nav_show; ?>">
  <a href="index.php"><i class="fa fa-home" style="font-size:20px !important" aria-hidden="true" ><br><font style="font-size:15px;">Home</font></i></a>
  <a href="index.php"><i class="fa fa-chevron-circle-left" style="font-size:20px !important" aria-hidden="true"><br><font style="font-size:15px">Back</font></i></a>
  </ul>
  </center>

</body>

</html>