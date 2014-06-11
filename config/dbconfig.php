<?php
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); // مستخدم القاعدة
define('DB_PASSWORD', 'root'); // كلمة المرور
define('DB_DATABASE', 'mghrd'); // اسم القاعدة

#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################

// بيانات الاتصال بقاعدة البيانات
$con =mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_DATABASE);
// Check connection  فحص حالة الاتصال
if (mysqli_connect_errno())
  {
    echo '<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>';
  echo "Failed to connect to MySQL: " . mysqli_connect_error() . 'فشل الاتصال بالقاعدة :';
  }
//mysqli_set_charset($con, "utf8");
?>
