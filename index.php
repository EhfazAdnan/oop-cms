<?php

$section = $_GET['section'] ?? 'home';

if($section == 'about-us'){
  include 'controller/abotUsPage.php';
}else if($section == 'contact'){
  include 'controller/contactUsPage.php';
}else{
  include 'controller/homePage.php';
}
   
?>

