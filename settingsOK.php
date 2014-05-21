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
@$date = intval($_POST['time']);
@$disable = intval($_POST['disable']);
@$section = intval($_POST['section']);

@$submit = $_POST['submit'];
@$access_token_oauth_token = $_SESSION['access_token']['oauth_token'] ;
@$access_token_oauth_token_secret = $_SESSION['access_token']['oauth_token_secret'];
//


$template = "template";
require_once($template."/header.html");


if(isset($_SESSION['id'])){

if($submit === 'disable'){

$sqli = "UPDATE `users` SET `Muslim` = '$disable' WHERE `users`.`accessToken` = '$access_token_oauth_token' ;";
$sql= mysqli_query($con,$sqli) ;

}elseif($submit === 'selected'){
$sqli = "UPDATE `users` SET `section` = '$section' WHERE `users`.`accessToken` = '$access_token_oauth_token' ;";
$sql= mysqli_query($con,$sqli) ;
}else{

$sqli = "UPDATE `users` SET `next` = '$date' WHERE `users`.`accessToken` = '$access_token_oauth_token' ;";
$sql= mysqli_query($con,$sqli) ;

}




echo '<head><meta charset="UTF-8"></head>';
echo"<br/> <center>   <img src=\"images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم تعديل القيم بنجاج</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'0; url=settings.php\' />';


}else{
	
require_once($template."/noregistered.html");

}

require_once($template."/footer.html");



?>