<?php
session_start();

$R_ID=$_GET['R_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"delete from requests where ID='$R_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Request Has Been Deleted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='myrequests.php';
        </script>";

?>