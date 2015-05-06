<?php

session_start();

//  enter the two commands required to 
//    1.  Set the Session array to empty
//    2.  Destroy all session variables 
//        (The USERID and USERNAME session variables)
unset($_SESSION['USERID']);
//$_SESSION = array();
session_destroy();

require("connectvars.php");

//  enter the header redirect command to redirect the user to the home page "index1.php" (below) 
header("Location:"."index.php");

?>
