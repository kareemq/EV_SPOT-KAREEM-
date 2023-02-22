<?php
session_start();

include("../includes/config.php"); 


$A_ID = $_SESSION['A_Log'];


if (!$_SESSION['A_Log'])
echo '<script language="JavaScript">
 document.location="../Admin_Login.php";
</script>';






$S_ID = $_GET['S_ID'];




$sql1 = mysqli_query($dbConn,"select * from stations where ID='$S_ID'");
$row1 = mysqli_fetch_array($sql1);


$Name = $row1['Name'];
$Phone_Number = $row1['Phone_Number'];
$Address = $row1['Address'];
$Username  = $row1['Username'];
$Password  = $row1['Password'];
					
$Status = $row1['Status'];




$Longitude = $row1['Longitude'];
$Latitude = $row1['Latitude'];





if(isset($_POST['Submit']))
{
$S_ID = mysqli_real_escape_string($dbConn,$_POST['S_ID']);

$Name = mysqli_real_escape_string($dbConn,$_POST['Name']);
$Phone_Number = mysqli_real_escape_string($dbConn,$_POST['Phone_Number']);
$Address = mysqli_real_escape_string($dbConn,$_POST['Address']);
$Username = mysqli_real_escape_string($dbConn,$_POST['Username']);
$Password = mysqli_real_escape_string($dbConn,$_POST['Password']);
$Status = mysqli_real_escape_string($dbConn,$_POST['Status']);


$Longitude = $_POST['Longitude'];
$Latitude = $_POST['Latitude'];









 

$sql1 = mysqli_query($dbConn,"update stations set Latitude='$Latitude', Longitude='$Longitude', Name='$Name', Phone_Number='$Phone_Number', Address='$Address', Username='$Username', Password='$Password', Status='$Status' where ID='$S_ID'");

echo "<script language='JavaScript'>
			  alert ('Station Information Has Been Updated !');
      </script>";

	echo "<script language='JavaScript'>
document.location='View_Stations_List.php';
        </script>";

}

?>
<!DOCTYPE html>
<html>

<head>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>EV Spot | Administration Area</title>

   <link href="css/bootstrap.min.css" rel="stylesheet">
	    <link href="css/plugins/bootstrap/bootstrap.min.css" rel="stylesheet">

    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
	    <link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">


    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/icon.png"/>
	
	<style>
@font-face {
   font-family: myFirstFont;
   src: url(fonts/NotoKufiArabic-Regular.ttf);
   font-size:8px;
}
body {
   font-family: myFirstFont;
}

</style>

</head>

<body style="back">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                   <li class="nav-header" style="background-color:#fff">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image"  src="img/logo2.png" width="100%"/>
                             </span>
							 

                       
                           
                            
                        </div>
                         <div class="logo-element" style="color:#000">
                          EVS
                        </div>
						
							
                    </li>
                    <li class="">
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>

                    </li>
					
					    <li class="active">
                        <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Stations</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="Add_New_Station.php">Add New Station</a></li>
                            <li><a href="View_Stations_List.php">View Stations List</a></li>

                        </ul>
                    </li>
					
					
					
					
					  <li>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Providers</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="View_Providers_List.php">View Providers List</a></li>

                        </ul>
                    </li>
					
					
					



                       <li>
                        <a href="#"><i class="fa fa-list"></i> <span class="nav-label">Requests</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="View_Requests_List.php">View Requests List</a></li>

                        </ul>
                    </li>



                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome To EV Spot - Administration Portal</span>
                </li>
                <li class="dropdown">

                    <ul class="dropdown-menu dropdown-messages">


                        <li class="divider"></li>


                    </ul>
                </li>



                <li>
                    <a href="Logout.php">
                        <i class="fa fa-sign-out"></i> Logout
                    </a>
                </li>

            </ul>

        </nav>
        </div>
          <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Stations</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
 <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Edit Station Information</h5>
                        <div class="ibox-tools">
                            
                          
                           
                        </div>
                    </div>
                   
                        
                        
                        
                        
                          <div class="ibox-content">

                  
                  
                  
                  
                     <form method="post" action="Edit_Station.php?S_ID=<?php echo $S_ID; ?>" class="form-horizontal" enctype="multipart/form-data">
                                
							<input type="hidden" name="S_ID" value="<?php echo $S_ID; ?>"/>
                 		
								
								
								
									<div class="form-group"><label class="col-sm-2 control-label">Name *</label>

                                    <div class="col-sm-10"><input value="<?php echo $Name; ?>" style="width:450px" type="text" name="Name" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>





	<div class="form-group"><label class="col-sm-2 control-label">Phone Number *</label>

                                    <div class="col-sm-10"><input value="<?php echo $Phone_Number; ?>" style="width:450px" type="text" name="Phone_Number" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
								
								





								
								
								
								<div class="form-group"><label class="col-sm-2 control-label">Username *</label>

                                    <div class="col-sm-10"><input value="<?php echo $Username; ?>" style="width:450px" type="text" name="Username" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								



								<div class="form-group"><label class="col-sm-2 control-label">Password *</label>

                                    <div class="col-sm-10"><input value="<?php echo $Password; ?>" style="width:450px" type="password" name="Password" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>





		
								
							<div class="form-group"><label class="col-sm-2 control-label">Location *</label>
 <div class="col-sm-10">					  
					  
					  

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCC3rHaqjNvzdrImcm7vllRtDgbAT-AaY&callback=initMap&libraries=places" async defer></script>





 							
											
											
				 <input id="searchInput" class="input-controls" type="text" value="" style="color:balck" placeholder="Enter Location">
 <div class="map" id="map" style="border: 1px solid #ccc; border-radius: 4px;
     color:#000; width: 50%; height: 380px;"></div>
 <div class="form_area">
     <input type="hidden" name="Address" value="<?php echo $Address; ?>" id="location">
     <input type="hidden" name="Latitude" value="<?php echo $Latitude; ?>" id="lat">
     <input type="hidden" name="Longitude" value="<?php echo $Longitude; ?>" id="lng">
 </div>
<script>
/* script */
function initialize() {
   var latlng = new google.maps.LatLng(<?php echo $Latitude; ?>,<?php echo $Longitude; ?>);
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
                    </div>
        
				  
				  
				                                  <div class="hr-line-dashed"></div>

								

								
								
								
								
								
								
							
								
								
								 
								<div class="form-group"><label class="col-sm-2 control-label">Status *</label>

                                    <div class="col-sm-10">
									
									
		<select style="width:450px" name="Status" class="form-control" required>
		<option value="<?php echo $Status; ?>"><?php echo $Status; ?></option>
		<option value="Active">Active</option>
		<option value="Deactive">Deactive</option>
		
		
		</select>
		</div>
                                
								
								
								</div>
                                <div class="hr-line-dashed"></div>
								
								                                
                           















                                
                               
                                
                                
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
																		                                        <button class="btn btn-primary" type="submit" name="Submit">Edit</button>

									<button class="btn btn-danger" type="reset" name="Reset">Clear</button>

                                    </div>
                                </div>
                            </form>
                  
     
                        </div>

						
                        
                    </div>
                </div>
             
                    </div>
                </div>
            
                <div class="footer">
                   
                    <div>
                         <center>EV Spot © 2022. All Rights Reserved.</center>
                    </div>
                </div>
            </div>
        </div>

        </div>
       



        </div>
    </div>

   <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


      
    <script src="js/plugins/jeditable/jquery.jeditable.js"></script>

    <script src="js/plugins/dataTables/datatables.min.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                   
 
 /*                   {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }    */
                   
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( 'example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>
</body>
</html>
