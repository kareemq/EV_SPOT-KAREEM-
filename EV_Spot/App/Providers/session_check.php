<?php

session_start();

include '../includes/config.php';

ini_set('session.gc_maxlifetime', 57600);
session_set_cookie_params(57600);



$P_ID = $_SESSION['P_Log'];



if ($_SESSION['P_Log']==''){
echo '<script language="JavaScript">
 document.location="../index.php";
</script>';
}




if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) 
{
$nav_show="visible";
}else{ 
$nav_show="hidden";	
}



$sql3 = mysqli_query($dbConn,"select * from providers where ID='$P_ID'");
$row3 = mysqli_fetch_array($sql3);
$Name=$row3['Name'];
$Phone_Number=$row3['Phone_Number'];
$Address=$row3['Address'];
$Password=$row3['Password'];



?>