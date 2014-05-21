<?php
 session_start();
 #################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
  if($_SESSION['admin'] == 1) {

require_once('./../config/dbconfig.php');
// [جلب البيانات]
$id = $_GET['id'];
$accessToken = $_GET['accessToken'];
$accessTokenSecret = $_GET['accessTokenSecret'];

$users = mysqli_query($con,"DELETE FROM `tweetsT` WHERE id = $id") or die(mysql_error());


header("Location: index.php?go=TimeTwitterV");
echo '<head><meta charset="UTF-8"></head>';
echo"<br/> <center>   <img src=\"./../images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم حذف التغريدة</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'2; url=index.php?go=TimeTwitterV\' />';
}else{echo '<head><meta charset="UTF-8"> <meta http-equiv=\'refresh\' content=\'0; url=index.php\' /></head>'; echo ' انت في المكان الخطأ' ;	}



?>