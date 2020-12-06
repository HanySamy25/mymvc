<?php
namespace CRUDMVC\Models;
use CRUDMVC\Core\DB;

class EmployeeModel extends DB{

private $db;
    public function __construct()
    {
        $this->db=$this->Connection();
    }
    public function GetEmloyees()
    {
        return $this->db->get('tblhr_employees');
    }


}