<?php
session_start();

include("../includes/config.php");


$A_ID = $_SESSION['A_Log'];


if (!$_SESSION['A_Log'])
echo '<script language="JavaScript">
 document.location="../Admin_Login.php";
</script>';

$C_ID = $_GET['C_ID'];


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
					
					
					
			
					   <li>
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
					
					
					



                       <li class="active">
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
                    <h2>Requests</h2>
                   
                </div>
                <div class="col-lg-2">

                </div>
            </div>

 <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Requests List Information</h5>
                        <div class="ibox-tools">



                        </div>
                    </div>





                          <div class="ibox-content">



                      <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Electronic Provider Name</th>
                        <th>Electronic Provider Type</th>
                        <th>Name</th>
                        <th>Phone Number</th>
                        <th>Car Type</th>
                        <th>Car Model</th>
                        <th>Charging Type</th>
                        <th>Payment Type</th>
                        <th>Status</th>
                       
                        <th>Request Date / Time</th>


                    </tr>
                    </thead>
                    <tbody>
                    <?php
					$sql1 = mysqli_query($dbConn,"select * from requests order by ID DESC");
					while ($row1 = mysqli_fetch_array($sql1)){

						$R_ID = $row1['ID'];
						$EP_ID = $row1['EP_ID'];
						$EP_Type  = $row1['EP_Type'];
						$Name  = $row1['Name'];
						$Phone_Number  = $row1['Phone_Number'];
						$Car_Type  = $row1['Car_Type'];
						$Car_Model  = $row1['Car_Model'];
						$Charging_Type  = $row1['Charging_Type'];
						$Payment_Type  = $row1['Payment_Type'];
						$Status  = $row1['Status'];
					
						$Request_Date_Time  = $row1['Request_Date_Time'];




					if ($EP_Type=='Provider'){
						
					$sql2 = mysqli_query($dbConn,"select * from providers where ID='$EP_ID'");
					$row2 = mysqli_fetch_array($sql2);
					$P_Name = $row2['Name'];
						
					}else{
						
					$sql2 = mysqli_query($dbConn,"select * from stations where ID='$EP_ID'");
					$row2 = mysqli_fetch_array($sql2);
					$P_Name = $row2['Name'];
						
					}


				

						?>
                    <tr class="grade">
                        <td><?php echo $R_ID; ?></td>
                        <td><?php echo $P_Name; ?></td>
                        <td><?php echo $EP_Type; ?></td>
                        <td><?php echo $Name; ?></td>
                        <td><?php echo $Phone_Number; ?></td>
                        <td><?php echo $Car_Type; ?></td>
                        <td><?php echo $Car_Model; ?></td>
                        <td><?php echo $Charging_Type; ?></td>
                        <td><?php echo $Payment_Type; ?></td>
						
                        <td><?php echo $Status; ?></td>
                        <td><?php echo $Add_Date_Time; ?></td>
                       
					</tr>

                    <?php
					}
					?>

                    </tbody>

                    </table>
                        </div>







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
