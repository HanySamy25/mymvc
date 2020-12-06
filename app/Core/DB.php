<?php
namespace CRUDMVC\Core;

use MysqliDb;

class DB{


    function Connection(){
        $db = new MysqliDb ('localhost', 'root', 'HSpc@951', 'intaldb');

        if($db){
            return $db;
        }else{
            echo "Error Connect DB";
        }

    }

}