<?php 

namespace CRUDMVC\Controllers;

use CRUDMVC\Core\Views;
use CRUDMVC\Models\EmployeeModel ;


class HomeController{

    public  function __constructor()
    {
       
    }


    public function index(){
       $data['title']="Home Page";
       $data['content']="My Content";
       Views::Load('Home',$data);
        
    }


    public function Emps()
    {
        
        $emps=new EmployeeModel();
        $data['title']="Employees";
        $data['allemps']=$emps->GetEmloyees();
        Views::Load('Employeeview',$data);
       
    }

}