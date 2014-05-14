<?php
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root'); // مستخدم القاعدة
define('DB_PASSWORD', ''); // كلمة المرور
define('DB_DATABASE', 'tw-2-30'); // اسم القاعدة

#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################

// خلاص وش تدور
$connection = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD) or die("فشل الاتصال بقاعدة البيانات");
$database = mysql_select_db(DB_DATABASE) or die("فشل الاتصال بقاعدة البيانات");
?>
