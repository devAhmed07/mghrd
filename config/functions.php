<?php
#################################################
// ahmed almalki
// 0543347557
// protop96@gmail.com
// http://waseethost.com/
#################################################

require 'dbconfig.php';

class User {

    function checkUser($uid, $oauth_provider, $username,$email,$twitter_otoken,$twitter_otoken_secret,$access_token_oauth_token,$access_token_oauth_token_secret,$screen_name) 
	{
        $query = mysql_query("SELECT * FROM `users` WHERE oauth_uid = '$uid' and oauth_provider = '$oauth_provider'") or die(mysql_error());
        $result = mysql_fetch_array($query);
        if (!empty($result)) {
            # User is already present
         

          $query = mysql_query("UPDATE `users` SET `twitter_oauth_token` = '$twitter_otoken',`twitter_oauth_token_secret` = '$twitter_otoken_secret',`accessToken` = '$access_token_oauth_token',`accessTokenSecret` = '$access_token_oauth_token_secret' WHERE  oauth_uid = '$uid' and oauth_provider = '$oauth_provider'") or die(mysql_error());
        } else {
            #user not present. Insert a new Record
            $query = mysql_query("INSERT INTO `users` (oauth_provider, oauth_uid, username,email,twitter_oauth_token,twitter_oauth_token_secret,accessToken,accessTokenSecret,screen_name,next) VALUES ('$oauth_provider', $uid, '$username','$email','$twitter_otoken','$twitter_otoken_secret','$access_token_oauth_token','$access_token_oauth_token_secret','$screen_name','300')") or die(mysql_error());
            $query = mysql_query("SELECT * FROM `users` WHERE oauth_uid = '$uid' and oauth_provider = '$oauth_provider'");
            $result = mysql_fetch_array($query);
            return $result;
        }
        return $result;
    }

    
    
    

}

?>

