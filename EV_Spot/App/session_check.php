<?php
include 'includes/config.php';

session_start();
/*
ini_set('session.gc_maxlifetime', 57600);
session_set_cookie_params(57600);
$C_ID = $_SESSION['C_Log'];
if ($_SESSION['C_Log']!=''){
echo '<script language="JavaScript">
 document.location="Customers/index.php";
</script>';
}
*/
if(strstr($_SERVER['HTTP_USER_AGENT'],'iPhone') || strstr($_SERVER['HTTP_USER_AGENT'],'iPad')) 
{
$nav_show="visible";
}else{ 
$nav_show="hidden";
}
?>