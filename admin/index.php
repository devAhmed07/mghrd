<?php
session_start();
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
<title>لوحة التحكم</title>
<meta name="generator" content="Bluefish 2.2.4" >
<meta name="author" content="ahmed almalki" >
<meta name="date" content="2013-08-21T02:37:54+0300" >
<meta name="copyright" content="waseethost">
<meta name="keywords" content="لوحة,التحكم">
<meta name="description" content="لوحة التحكم">
<meta name="ROBOTS" content="NOINDEX, NOFOLLOW">
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8">
<meta http-equiv="content-style-type" content="text/css">
<meta http-equiv="expires" content="0">
<link href="template/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="template/bootstrap/css/bootstrap.rtl.css" rel="stylesheet" type="text/css">
<link href="template/styles.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="template/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="template/bootstrap/js/bootstrap.rtl.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">
</script>
</head>
<body>
<?php

require './../config/dbconfig.php';
//Username
//Password
if(@$_SESSION['admin']== 1) {
if(@$_GET['go'] == 'logoff') {$_SESSION['admin'] = 0;header('Location: index.php '); }			
if(@$_GET['go'] == 'twitw') {$ltr = 'template/twitw.html';}
if(@$_GET['go'] == '') {$ltr = 'template/TimeTwitterV.html';}
if(@$_GET['go'] == 'Statistics') {$ltr = 'template/Statistics.html';}
if(@$_GET['go'] == 'website') {$ltr = 'template/website.html';}
if(@$_GET['go'] == 'Manager') {$ltr = 'template/Manager.html';}
if(@$_GET['go'] == 'TimeTwitter') {$ltr = 'template/TimeTwitter.html';}
if(@$_GET['go'] == 'TimeTwitterV') {$ltr = 'template/TimeTwitterV.html';}
if(@$_GET['go'] == 'Upgrade') {$ltr = 'template/Upgrade.html';}
if(@$_GET['go'] == 'users') {$ltr = 'template/users.html';}
if(@$_GET['go'] == 'Section') {$ltr = 'template/addSection.html';}

require_once('template/index.html');
}else {
require_once('template/logged.html');

}

?>
<div id="cc">برمجة : <a href="http://waseethost.com/" >الوسيط هوست</a> جميع الحقوق محفوظه للوسيط هوست</div>
</body>
</html>