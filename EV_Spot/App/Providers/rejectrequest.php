<?php
session_start();

$R_ID=$_GET['R_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"update requests set Status='Reject' where ID='$R_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Request Has Been Rejected Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='myrequests.php';
        </script>";

?>