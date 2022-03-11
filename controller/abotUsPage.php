<?php

class AboutUsController extends controller {
   function defaultAction(){
      $variables['title'] = 'About Us Page';
      $variables['content'] = 'About Us content of the page';

      $template = new Template('default');
      $template->view('static-page', $variables);
   }
}
   
?>