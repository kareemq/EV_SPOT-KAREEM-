<?php
session_start();

include("../includes/config.php");


$S_ID = $_SESSION['S_Log'];


if (!$_SESSION['S_Log'])
echo '<script language="JavaScript">
 document.location="../Station_Login.php";
</script>';



$sql1 = mysqli_query($dbConn,"select * from stations where ID='$S_ID'");
$row1 = mysqli_fetch_array($sql1);

$Phone_Number = $row1['Phone_Number'];
$Station_Password = $row1['Password'];
						
						





if(isset($_POST['Submit']))
{
	
	
$S_ID=$_POST['S_ID'];
$Phone_Number = $_POST['Phone_Number'];

$update = mysqli_query($dbConn,"update stations set Phone_Number='$Phone_Number' where ID='$S_ID'");




$Error = 'Station Account Information Has Been Updated !';






}


















if(isset($_POST['Submit2']))
{
	
	
$S_ID=$_POST['S_ID'];
$Station_Password=$_POST['Station_Password'];
$New_Station_Password=$_POST['New_Station_Password'];
$Old_Password=$_POST['Old_Password'];







if ($Old_Password==$Station_Password){
	
$New_Station_Password_2 = $New_Station_Password;

$update = mysqli_query($dbConn,"update stations set Password='$New_Station_Password_2' where ID='$S_ID'");

	
}else{
	
		
	
	$Error = 'Station Old Password Is Not Correct !';

	
}




$Error = 'Station Account Information Has Been Updated !';







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
                            <img alt="image"  src="img/logo.png" width="100%"/>
                             </span>
							 

                       
                           
                           
                        </div>
                        <div class="logo-element" style="color:#000">
                            EVS
                        </div>
						
							
                    </li>
                    <li >
                        <a href="index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Home</span></a>

                    </li>
					
				
				  <li class="active">
                        <a href="My_Account.php"><i class="fa fa-user"></i> <span class="nav-label">My Account</span></a>

                    </li>
				
					
					
					
					
					

                       <li>
                        <a href="#"><i class="fa fa-building-o"></i> <span class="nav-label">My Requests</span><span class="fa arrow"></span></a>
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
                    <span class="m-r-sm text-muted welcome-message">Welcome To EV Spot - Stations Portal</span>
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
                    <h2>My Account</h2>
                    
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
 <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>My Account Information</h5>
                        <div class="ibox-tools">
                            
                          
                           
                        </div>
                    </div>
                   
                        
                        
                        
                        
                          <div class="ibox-content">

                  
                  
                  
				  
				  
				  
				  
				  
				  
				   <form method="post" action="My_Account.php" class="form-horizontal" enctype="multipart/form-data">
                                
                                
                             <input type="hidden" name="S_ID" value="<?php echo $S_ID; ?>"/>   
                               
                                
                             
							
								
								
								
						
								
									<div class="form-group"><label class="col-sm-2 control-label">Phone Number *</label>

                                    <div class="col-sm-10"><input style="width:40%" pattern="[0-9]{10}" title="Phone Number Must Be 10 Numbers" value="<?php echo $Phone_Number; ?>"  type="text" name="Phone_Number" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
								
                                    
                              

                                
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit" name="Submit">Update</button>
									<button class="btn btn-white" type="reset">Cancel</button>
                                    </div>
                                </div>
                            </form>
                  
				  
				  
				  
				  <hr>
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
				  
                  
                     <form method="post" action="My_Account.php" class="form-horizontal" enctype="multipart/form-data">
                                
                                
                             <input type="hidden" name="S_ID" value="<?php echo $S_ID; ?>"/>   
                             <input type="hidden" name="Station_Password" value="<?php echo $Station_Password; ?>"/>   
                               
                                
                             
							
								
								
								<div class="form-group"><label class="col-sm-2 control-label">Old Password *</label>

                                    <div class="col-sm-10"><input value=""  style="width:40%" type="password" name="Old_Password" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
						
								
									<div class="form-group"><label class="col-sm-2 control-label">New Password *</label>

                                    <div class="col-sm-10"><input value=""  style="width:40%" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must Contain At Least One Number And One Uppercase And Lowercase Letter, And At Least 8 Or More Characters" type="password" name="New_Employer_Password" class="form-control" required></div>
                                </div>
                                <div class="hr-line-dashed"></div>
								
								
								
								
                                    
                              

                                
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                    <button class="btn btn-primary" type="submit" name="Submit2">Change</button>
									<button class="btn btn-white" type="reset">Cancel</button>
                                    </div>
                                </div>
                            </form>
                  
                  
                  
                  
              
                        </div>
                        
                        
                       
                        
                        
                        
                        
                        
                    </div>
                </div>
				</div></div>
             
                
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
            oTable.$('td').editable( '../example_ajax.php', {
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
