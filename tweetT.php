<?php 
	
require_once'loq.php';
$template = "template";

if(isset($_SESSION['id'])){
require_once($template."/header.html");
require_once($template."/tweetT.html");
require_once($template."/footer.html");

}else{
	
require_once($template."/Login/index.html");

}



?>