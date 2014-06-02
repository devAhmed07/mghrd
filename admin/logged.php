<?php
session_start();
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
//header('Location: index.php ');
require './../config/dbconfig.php';
print $user = mysqli_real_escape_string($con,$_POST['username']);
print$password = mysqli_real_escape_string($con,$_POST['password']);
if(!$user && !$password) {

}else {

$sql = mysqli_query($con,"select * from `AdminCp` where `Username` = '$user' and `Password` = '$password' LIMIT 1") ;
$row = mysqli_fetch_assoc($sql);
print_r($row);
//print_r($_POST);
if($user == $row['Username']  && $password == $row['Password']){
	$_SESSION['admin'] = 1;
    header('Location:index.php');
}else {
	$_SESSION['admin'] = '';
print_r($_POST);
}
}

mysqli_close($con);

?>