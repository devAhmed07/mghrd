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
function timet ($t,$h=0) {
$xh = date("h",$t) * 60 *60;
$xm = date("i",$t) *60;
$xt = $xh+$xm;
$o =(($t-$xt)+$h);
return $o;
}

////
@$date =strtotime($_POST['date']);

@$timeh = $_POST['timeh'] ;
@$timem = $_POST['timem'] ;
@$times = $_POST['times'] ;
@$txtwi = strip_tags($_POST['txtwi']) ;
@$access_token_oauth_token = $_SESSION['access_token']['oauth_token'] ;
@$access_token_oauth_token_secret = $_SESSION['access_token']['oauth_token_secret'];
$timedate = ($date)+(($timeh*60)*60)+($timem*60)+($times);
//


$template = "template";
require_once($template."/header.html");


if(isset($_SESSION['id'])){
$sqli = "INSERT INTO `tweetsU` (`id`, `timestamp`, `tweet`, `accessToken`, `accessTokenSecret`) VALUES (NULL, '".$timedate."', '".$txtwi."','".$access_token_oauth_token."', '".$access_token_oauth_token_secret."');";
$sql= mysqli_query($con,$sqli) ;
echo"<br/> <center>   <img src=\"images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم جدولة التغريدات</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'0; url=tweet.php\' />';



}else{
	
require_once($template."/noregistered.html");

}

require_once($template."/footer.html");



?>