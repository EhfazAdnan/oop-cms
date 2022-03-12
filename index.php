<?php
session_start();

define('ROOT_PATH', dirname(__FILE__) . DIRECTORY_SEPARATOR);
define('VIEW_PATH', ROOT_PATH . DIRECTORY_SEPARATOR . 'view' . DIRECTORY_SEPARATOR);

require_once ROOT_PATH.'src/controller.php';
require_once ROOT_PATH.'src/template.php';
require_once ROOT_PATH.'src/DatabaseConnection.php';
require_once ROOT_PATH.'model/Page.php';

// db connection
DatabaseConnection::connect('localhost','oop-cms','root','');

$section = $_GET['section'] ?? $_POST['section'] ?? 'home';
$action = $_GET['action'] ?? $_POST['action'] ?? 'default';

if($section == 'about-us'){

  include ROOT_PATH.'controller/abotUsPage.php';

  $aboutController = new AboutUsController();

  $aboutController->runAction($action);

}else if($section == 'contact'){

  include ROOT_PATH.'controller/contactUsPage.php';
  $contactController = new ContactController();

  // make dynamic and call functions from class
  $contactController->runAction($action);

  // if($action == 'show'){
  //   $contactController->showFormAction();
  // }elseif($action == 'submit'){
  //   $contactController->submitContactFormAction();
  // }

}else{

  include ROOT_PATH.'controller/homePage.php';

  $homeController = new HomePageController();

  $homeController->runAction($action);

}
   
?>

