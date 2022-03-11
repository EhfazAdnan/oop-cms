<?php
   class HomePageController extends controller {
      function defaultAction(){

         $variables['title'] = 'Home page title';
         $variables['content'] = 'Welcome to our homepage';

         $template = new Template('default');
         $template->view('static-page', $variables);
      }
   }
      
?>