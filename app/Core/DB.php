<?php
namespace CRUDMVC\Core;

use MysqliDb;

class DB{


    function Connection(){
        $db = new MysqliDb ('localhost', 'root', '', '');

        if($db){
            return $db;
        }else{
            echo "Error Connect DB";
        }

    }

}