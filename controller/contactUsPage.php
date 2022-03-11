<?php

class ContactController extends controller {

   function runBeforeAction(){
      if($_SESSION['has_submitted_the_form'] ?? 0 == 1){
         include 'view/contact/thank-you-temp/already-submitted-page.html';
         return false;
      }
      return true;
   }

   function defaultAction(){
      // var_dump($_SESSION);

      include "view/contact/contact-us.html";
   }

   function submitContactAction(){

      // validate
      // store data
      // send email

      $_SESSION['has_submitted_the_form'] = 1;

      include 'view/contact/thank-you-temp/contact-us-thank-you.html';
   }

}
   
?>