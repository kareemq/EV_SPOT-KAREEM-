<?php
session_start();

$P_ID=$_GET['P_ID'];

require_once('../includes/config.php');


mysqli_query($dbConn,"update providers set Status='Accept' where ID='$P_ID'");

	  
echo "<script language='JavaScript'>
			  alert ('This Provider Has Been Accepted Successfully !');
      </script>";
	  

	echo "<script language='JavaScript'>
document.location='View_Providers_List.php';
        </script>";

?>