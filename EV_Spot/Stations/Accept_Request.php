<?php
session_start();

$R_ID=$_GET['R_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"update requests set Status='Accept' where ID='$R_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Request Status Has Been Accepted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Requests_List.php';
        </script>";

?>