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
@$name = $_POST['Section'] ;
//




$sql= mysqli_query($con,"INSERT INTO `section` (`name`) VALUES ('".$name."')") ;

echo '<head><meta charset="UTF-8"></head>';
echo"<br/> <center>   <img src=\"./../images/Twitter-Shipping-Box-icon.png\" alt=\"\" ></center><br/>";
echo"<br/><center><h2>تم انشاء القسم</h2></center>";
echo '<meta http-equiv=\'refresh\' content=\'2; url=index.php?go=Section\' />';

}else{
  echo '<head><meta charset="UTF-8"> <meta http-equiv=\'refresh\' content=\'0; url=index.php\' /></head>';
	echo ' انت في المكان الخطأ' ;
}





?>