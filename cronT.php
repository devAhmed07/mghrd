<?php

require_once("config/dbconfig.php"); 
require_once("config/twconfig.php"); 
require_once('config/twitter.class.php');
////
$consumerKey = YOUR_CONSUMER_KEY;
$consumerSecret = YOUR_CONSUMER_SECRET;
$date = time();
$tws = 100 ; // عدد المستخدمين في كل دقيقة
////
$users1 = mysqli_query($con,"SELECT * FROM users WHERE `nextOk` <= $date");
				while($rows = mysqli_fetch_assoc($users1)) { // لولب آلإرسال
//$rows['section'];
                $tweets = mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM `tweetst` WHERE `section` = '".$rows['section']."' ORDER BY RAND() LIMIT 0,1 "));
                $txtwi = $tweets['tweet'] ;
                $accessToken = $rows['accessToken'];
				$accessTokenSecret =$rows['accessTokenSecret'];
			 	$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
				$oksend = $twitter->send($txtwi);

                if($oksend == 0) { // عدم نجاح عملية آلإرسال
				$twitter = new Twitter($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);
				$oksend = $twitter->send($txtwi);
                mysqli_query($con,"UPDATE `cron` SET `users` = `users`+1");
                mysqli_query($con,"UPDATE `users` SET `nextOk` = `next`+`".$date."`");
                                 }else { // نجاح العملية
                mysqli_query($con,"UPDATE `cron` SET `users` = `users`+1");
                mysqli_query($con,"UPDATE `users` SET `nextOk` = `next`+`".$date."`");
                                       }
}// نهاية اللولب













?>