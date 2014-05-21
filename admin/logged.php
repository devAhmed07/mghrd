<?php
session_start();
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
header('Location: index.php ');
require './../config/dbconfig.php';
@$user=mysql_real_escape_string($_POST['username']);
@$password=mysql_real_escape_string($_POST['password']);
if(!$user && !$password) {
    header('Location:index.php');
}else {

$sql=mysqli_query($con,"select * from AdminCp where  Username='$user' and Password='$password' ") ;
$row=mysqli_fetch_assoc($sql);

if($user==$row['Username'] && $password==$row['Password']){
	$_SESSION['admin'] = 1;

}else {
	$_SESSION['admin'] = '';

}
}
?>