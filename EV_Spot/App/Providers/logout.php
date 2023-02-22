<?php

session_start();

include "../includes/config.php";




$P_ID = $_SESSION['P_Log'];







$_SESSION['P_Log']=0;






	  
echo '<script language="JavaScript">
            document.location="../index.php?DID='.$Device_ID.'&user_ID='.$U_ID.'";
        </script>';

?>