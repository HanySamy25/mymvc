<?php

namespace CRUDMVC\Core;
/**
 * forn end controller
 * 
 */

 class App
 {
protected $controller = "HomeController";
protected $action = "index";
protected $params=[];

public function __construct()
{
    $this->PrepareUrl();

    $this->render();
}



private function PrepareUrl(){
    $url = $_SERVER['QUERY_STRING'];
    if(!empty($url)){
        $url=trim($url,"/");
        $url =explode("/",$url);
        $this->controller=isset($url[0])?ucfirst($url[0])."Controller":"HomeController";
        $this->action=isset($url[1])?$url[1]:"index";
        unset($url[0],$url[1]);
        $this->params=!empty($url)?array_values($url):[];
    }
}



private function render(){
    
    $this->controller="CRUDMVC\Controllers\\".$this->controller;
    if(class_exists($this->controller)){
       
        $controller= new $this->controller;
       
        if(method_exists($controller,$this->action)){
            
            call_user_func_array([$controller,$this->action],$this->params);
            
        }else{
            echo "Methid not exist";
        }
    }else{
        echo "Class ".$this->controller." Not Exist";
    }
}







 }