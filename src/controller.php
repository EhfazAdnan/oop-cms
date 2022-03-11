<?php
class Controller {
    function runAction($actionName){

        if(method_exists($this, 'runBeforeAction')){
           $result = $this->runBeforeAction();
           if($result == false){
               return;
           }
        }

        $actionName .= 'Action';
        if(method_exists($this, $actionName)){
           $this->$actionName();
        }else{
           include 'view/not-found/not-found.html';
        }
     }
}