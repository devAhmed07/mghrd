<?php
session_start();
error_reporting(0);
if($_SESSION['admin'] == 1){}else{
    
    require_once('template/logged.html');
    exit();
}

?>
<!DOCTYPE HTML>
<meta http-equ<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="bootstrap/ico/favicon.ico">

    <title>تحكم بسكربتات الوسيط هوست</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.rtl.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">لوحة التحكم</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">الرئيسية</a></li>
            <li><a href="#">الاعدادات</a></li>
            <li><a href="#">الحسابات</a></li>
            <li><a href="#">بيانات الموقع</a></li>
             <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">الأدارة <b class="caret"></b></a>
                  <ul class="dropdown-menu">
     <li <a href="?go=TimeTwitterV"><i class="icon-home icon-white"></i> الرئيسيه</a></li>
    <li><a href="?go=TimeTwitter"><i class="icon-edit"></i> جدولة التغريدات</a></li>
     <li><a href="?go=TimeTwitterV"><i class="icon-edit"></i>  التغريدات المجدولة  </a></li>
     <li><a href="?go=Section"><i class="icon-edit"></i>أضافة الاقسام</a></li>
    <li><a href="?go=website"><i class="icon-wrench"></i> إعدادات الموقع</a></li>
     <li><a href="?go=users"><i class="icon-user"></i> عرض المشتركين</a></li>
     <li><a href="?go=Manager"><i class="icon-lock"></i> تغير كلمة المرور</a></li>
    <li><a href="?go=Statistics"><i class="icon-comment"></i> إحصاءات</a></li>
     <li><a href="?go=Upgrade"><i class="icon-repeat"></i> البحث عن تحديث</a></li>
    <li><a href="?go=logoff"><i class="icon-ban-circle"></i> تسجيل الخروج</a></li>
                  </ul>
          </ul>




        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
    <li><a href="?go=TimeTwitterV"><i class="icon-home icon-white"></i> الرئيسيه</a></li>
    <li><a href="?go=TimeTwitter"><i class="icon-edit"></i> جدولة التغريدات</a></li>
     <li><a href="?go=TimeTwitterV"><i class="icon-edit"></i>  التغريدات المجدولة  </a></li>
     <li><a href="?go=Section"><i class="icon-edit"></i>أضافة الاقسام</a></li>
    <li><a href="?go=website"><i class="icon-wrench"></i> إعدادات الموقع</a></li>
     <li><a href="?go=users"><i class="icon-user"></i> عرض المشتركين</a></li>
     <li><a href="?go=Manager"><i class="icon-lock"></i> تغير كلمة المرور</a></li>
    <li><a href="?go=Statistics"><i class="icon-comment"></i> إحصاءات</a></li>
     <li><a href="?go=Upgrade"><i class="icon-repeat"></i> البحث عن تحديث</a></li>
    <li><a href="?go=logoff"><i class="icon-ban-circle"></i> تسجيل الخروج</a></li>
          </ul>
  
        </div>
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
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/docs.min.js"></script>
  </body>
</html>