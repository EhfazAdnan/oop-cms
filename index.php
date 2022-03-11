<?php
session_start();
require_once 'src/controller.php';

$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';

if($section == 'about-us'){

  include 'controller/abotUsPage.php';

  $aboutController = new AboutUsController();

  $aboutController->runAction($action);

}else if($section == 'contact'){

  include 'controller/contactUsPage.php';
  $contactController = new ContactController();

  // make dynamic and call functions from class
  $contactController->runAction($action);

  // if($action == 'show'){
  //   $contactController->showFormAction();
  // }elseif($action == 'submit'){
  //   $contactController->submitContactFormAction();
  // }

}else{

  include 'controller/homePage.php';

}
   
?>

