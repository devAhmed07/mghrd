<?php
ob_start();
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################
require("config/twitter/twitteroauth.php");
require 'config/twconfig.php';
require 'config/functions.php';
session_start();
if (!empty($_GET['oauth_verifier']) && !empty($_SESSION['oauth_token']) && !empty($_SESSION['oauth_token_secret'])) {
    // We've got everything we need
    $twitteroauth = new TwitterOAuth(YOUR_CONSUMER_KEY, YOUR_CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);
// Let's request the access token
    $access_token = $twitteroauth->getAccessToken($_GET['oauth_verifier']);
// Save it in a session var
    $_SESSION['access_token'] = $access_token;
// Let's get the user's info
    $user_info = $twitteroauth->get('account/verify_credentials');
  // Print user's info
//header("Location: index.php");
   // echo '<pre>';
   // print_r($user_info); // فشل في جلب البيانات
   // echo '</pre><br/>';
    if (isset($user_info->error)) {
        // Something's wrong, go back to square 1  
        header('Location: login-twitter.php');
    } else {
      $access_token_oauth_token = $_SESSION['access_token']['oauth_token'] ;
      $access_token_oauth_token_secret = $_SESSION['access_token']['oauth_token_secret'];
	   $twitter_otoken= $_SESSION['oauth_token'];
	   $twitter_otoken_secret= $_SESSION['oauth_token_secret'];
	   $screen_name = $_SESSION['access_token']['screen_name'];
	   $email='';
        $uid = $user_info->id;// جلب رقم العضوية
        $username = $user_info->name; // جلب الاسم
        // يشيك على العضو في قاعدة البيانات
        $user = new User();
        $userdata = $user->checkUser($uid, 'twitter', $username,$email,$twitter_otoken,$twitter_otoken_secret,$access_token_oauth_token,$access_token_oauth_token_secret,$screen_name,$con);
        if(!empty($userdata)){

            $_SESSION['id'] = $userdata['id'];
            $_SESSION['oauth_id'] = $uid;
            $_SESSION['username'] = $userdata['username'];
            $_SESSION['oauth_provider'] = $userdata['oauth_provider'];
            $_SESSION['user_info'] = $user_info ;
            header("Location: index.php");
        }
    }
} else {
    // Something's missing, go back to square 1
    header('Location: login-twitter.php');
}
?>
