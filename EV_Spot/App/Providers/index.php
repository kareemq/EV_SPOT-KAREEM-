<?php
session_start();

include 'includes/config.php';
include 'session_check.php';













?>
<html  lang="en" dir="ltr">

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
   
		
        <div class="site__body" style="margin-top:42px">
            <div class="block block-slideshow">
                <div class="container">
                    <div class="block-slideshow__carousel">
                        <div class="owl-carousel">
                            <a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('../images/final/slider-1.png')"></span>
                            </a>
                           <a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('../images/final/slider-2.png')"></span>
                                                             

                            </a>
                            <a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('../images/final/slider-1.png')"></span>
                                                               

                            </a>
							
							
							<a class="block-slideshow__item" href="">
                                <span class="block-slideshow__item-image block-slideshow__item-image--mobile" style="background-image: url('../images/final/slider-2.png')"></span>
                                                               

                            </a>
							
							
							
                        </div>
                    </div>
                </div>
            </div>
            <div class="block block-brands block-brands--layout--columns-8-full">
                <div class="container">
                    <center>
					<br><br><br>


	<ul class="block-brands__list" style="justify-content: center;
  display: flex;">
                    
                     			
                   <li class="block-brands__item">
                            <a href="myrequests.php" class="block-brands__item-link">
                                <img src="../images/final/c1.png" alt="">
																<h5>My Requests</h5>

                            </a>
                        </li>
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