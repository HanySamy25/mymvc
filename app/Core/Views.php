<?php

namespace CRUDMVC\Core;

class Views{


    public static function Load($viewname,$viewdata=[]){

        
        $file=VIEWS.$viewname.'.php';
        
        if(file_exists($file)){
            extract($viewdata);
            require($file);
        }else{
            echo 'This View '.$viewname.' Dosn\'t Exist';
        }
    }
}