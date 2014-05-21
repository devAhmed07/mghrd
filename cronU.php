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
$users = mysqli_query($con,"SELECT * FROM `users` WHERE `Muslim`!='1' AND `nextOk`<'".time()."' LIMIT ".$tws." ");
 while($rowU = mysqli_fetch_assoc($users)) {
$tweetsU = mysqli_query($con,"SELECT * FROM `tweetsU` WHERE `accessToken` LIKE '".$rowU['accessToken']."' ORDER BY RAND() LIMIT 0,1 ");
         while($rowT = mysqli_fetch_assoc($tweetsU)) {
         $accessToken = $rowT['accessToken'];
         $accessTokenSecret =$rowT['accessTokenSecret'];
         $txtwi = $rowT['tweet'];
         $twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
         $oksend = $twitter->send($txtwi);
         $nextOk = time() + $rowU['next'];
         mysqli_query($con,"UPDATE `users` SET `nextOk`='".$nextOk."' WHERE `id`='".$rowU['id']."'");
         }
}

/*

*/

exit;
?>