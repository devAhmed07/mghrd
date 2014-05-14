<?php 
	
require_once'loq.php';
$template = "template";
require_once($template."/header.html");
if(isset($_SESSION['id'])){
	
require_once($template."/tweet.html");


}else{
	
require_once($template."/noregistered.html");

}

require_once($template."/footer.html");

?>