<?php

class ContactController extends controller {

   function runBeforeAction(){
      if($_SESSION['has_submitted_the_form'] ?? 0 == 1){

         $dbh = DatabaseConnection::getInstance();
         $dbc = $dbh->getConnection();

         $pageObj = new Page($dbc);
         $pageObj->findById(4);
         $variables['pageObj'] = $pageObj;
   
         $template = new Template('default');
         $template->view('static-page', $variables);

         return false;
      }
      return true;
   }

   function defaultAction(){
      // var_dump($_SESSION);

      $dbh = DatabaseConnection::getInstance();
      $dbc = $dbh->getConnection();

      $pageObj = new Page($dbc);
      $pageObj->findById(3);
      $variables['pageObj'] = $pageObj;

      $template = new Template('default');
      $template->view('contact/contact-us', $variables);
   }

   function submitContactAction(){

      // validate
      // store data
      // send email

      $_SESSION['has_submitted_the_form'] = 1;

      $dbh = DatabaseConnection::getInstance();
      $dbc = $dbh->getConnection();

      $pageObj = new Page($dbc);
      $pageObj->findById(5);
      $variables['pageObj'] = $pageObj;

      $template = new Template('default');
      $template->view('static-page', $variables);

   }

}
   
?>