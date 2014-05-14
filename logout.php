<?php
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
if (array_key_exists("logout", $_GET)) {
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['username']);
    unset($_SESSION['oauth_provider']);
    session_destroy();
    header("location: index.php");
}
?>
