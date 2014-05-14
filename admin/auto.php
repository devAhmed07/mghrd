 <?php
session_start();
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
header('Location: index.php?go=website');
$txt1 = $_POST['text1'];
$txt2 = $_POST['text2'];
$txt3 = $_POST['text3'];
$txt4 = $_POST['text4'];
require './../config/dbconfig.php';
if($_SESSION['admin'] == 1) {
mysql_query("") ;
echo '<meta http-equiv=\'refresh\' content=\'0; url=index.php?go=website\' />';

}else{echo ' انت في المكان الخطأ' ;	}

 ?>