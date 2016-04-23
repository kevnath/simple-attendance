<?php

/**
 * Created by PhpStorm.
 * User: Kevin Nathanael
 * Date: 4/16/2016
 * Time: 9:35 AM
 */

include_once('Repository.php');

class EmployeeRepository extends Repository
{
    
    public function __construct()
    {
        $this->init();
    }

    public function findEmployeeById($id) {
        $stmt = $this->db->prepare('SELECT * FROM employee WHERE id = ?');
        $stmt->execute(array($id));
        $stmt->execute();
        if(!$stmt) {
            die("Execute query error, because: ". $this->db->errorInfo());
        }
        return $stmt;
    }

    public function findAllEmployee() {
        $stmt = $this->db->query('SELECT * FROM employee');
        return $stmt;
    }
}