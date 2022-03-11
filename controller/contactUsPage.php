<?php

class ContactController extends controller {

   function runBeforeAction(){
      if($_SESSION['has_submitted_the_form'] ?? 0 == 1){

         $variables['title'] = 'Already Sumitted the page';
         $variables['content'] = 'We will conatct you soon';
   
         $template = new Template('default');
         $template->view('static-page', $variables);

         return false;
      }
      return true;
   }

   function defaultAction(){
      // var_dump($_SESSION);

      $variables['title'] = 'Contact page title';
      $variables['content'] = 'Welcome to our Contact Page';

      $template = new Template('default');
      $template->view('contact/contact-us', $variables);
   }

   function submitContactAction(){

      // validate
      // store data
      // send email

      $_SESSION['has_submitted_the_form'] = 1;

      $variables['title'] = 'Thank you for contacting us';
      $variables['content'] = 'We will conatct you soon';

      $template = new Template('default');
      $template->view('static-page', $variables);

   }

}
   
?>