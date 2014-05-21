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
////
@$section = $_POST['date'] ;
@$txtwi = $_POST['txtwi'] ;
//
$txtwiM= explode("\n",$txtwi);
foreach($txtwiM as $txtwiR)
{
if(!isset($txtwiR) || trim($txtwiR)===''){
}else{


$sql= mysqli_query($con,"INSERT INTO `tweetsT` (`id`, `section`, `tweet`, `group`) VALUES (NULL, '".$section."', '".$txtwiR."', '0')") ;

}
}
echo '<head><meta charset="UTF-8"></head>';
echo"<br/> <center>   <img src=\"./../images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم جدولة التغريدات</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'2; url=index.php?go=TimeTwitterV\' />';
  	
}else{
  echo '<head><meta charset="UTF-8"> <meta http-equiv=\'refresh\' content=\'0; url=index.php\' /></head>';	
	echo ' انت في المكان الخطأ' ;
}





?>