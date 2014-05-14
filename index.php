<?php

require_once'loq.php';

////////////////////////////////////
if(@$_SESSION['follow'] != 1){
if(trim($row['followe']) != ''){
require 'config/twconfig.php';
require_once('config/twitter.class.php');
@$access_token_oauth_token = $_SESSION['access_token']['oauth_token'] ;
@$access_token_oauth_token_secret = $_SESSION['access_token']['oauth_token_secret'];
@$twitter = new Twitter(YOUR_CONSUMER_KEY, YOUR_CONSUMER_SECRET, $access_token_oauth_token, $access_token_oauth_token_secret);
@$oksend = $twitter->follow($row['followe'],'','true');
$_SESSION['follow'] = 1;

}

}else{
echo'';
}

///////////////////////////////////


$template = "template";
require_once($template."/header.html");
if(isset($_SESSION['id'])){
require_once($template."/registered.html");


}else{
	
require_once($template."/noregistered.html");

}

require_once($template."/footer.html");

?>