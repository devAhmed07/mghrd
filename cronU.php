<?php

require_once("config/dbconfig.php"); 
require_once("config/twconfig.php"); 
require_once('config/twitter.class.php');
////
$consumerKey = YOUR_CONSUMER_KEY;
$consumerSecret = YOUR_CONSUMER_SECRET;
$date = time();
$tws = 100; // عدد التغريدة في كل مرة
////


///
//فحص العضويات
$users = mysql_query("SELECT * FROM `users` WHERE `Muslim`!='1' AND `nextOk`<'".time()."' LIMIT ".$tws." ");
 while($rowU = mysql_fetch_assoc($users)) {
$tweetsU = mysql_query("SELECT * FROM `tweetsU` WHERE `accessToken` LIKE '".$rowU['accessToken']."' ORDER BY RAND() LIMIT 0,1 ");
         while($rowT = mysql_fetch_assoc($tweetsU)) {
         $accessToken = $rowT['accessToken'];
         $accessTokenSecret =$rowT['accessTokenSecret'];
         $txtwi = $rowT['tweet'];
         $twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
         $oksend = $twitter->send($txtwi);
         $nextOk = time() + $rowU['next'];
         mysql_query("UPDATE `users` SET `nextOk`='".$nextOk."' WHERE `id`='".$rowU['id']."'");
         }
}

/*

*/

exit;
?>