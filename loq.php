<?php
session_start();
if (isset($_SESSION['id'])) {
    // Redirection to login page twitter or facebook
  //  header("location: home.php");
}

if (array_key_exists("login", $_GET)) {
    $oauth_provider = $_GET['oauth_provider'];
    if ($oauth_provider == 'twitter') {
        header("Location: login-twitter.php");
    } else if ($oauth_provider == 'facebook') {
        header("Location: login-facebook.php");
    }
}

  require 'config/dbconfig.php';
  $sql=mysql_query("SELECT * FROM `all` ") ;
  $row=mysql_fetch_assoc($sql);
  ?>