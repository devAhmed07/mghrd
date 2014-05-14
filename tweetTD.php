<?php 
 //session_start();
 #################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
require_once'loq.php';
require_once('config/dbconfig.php');
//////////

////
$id = intval($_GET['id']) ;
$access_token_oauth_token = $_SESSION['access_token']['oauth_token'] ;

//


if(isset($_SESSION['id'])){
$sqli= "DELETE FROM tweetsU WHERE id = '".$id."' AND accessToken = '".$access_token_oauth_token."'";
$sql= mysql_query($sqli) ;
echo mysql_error();
//echo"<br/> <center>   <img src=\"images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
//cho"<br/><center><h2>تم حذفها</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'0; url=tweet.php\' />';



}else{
	


}




?>