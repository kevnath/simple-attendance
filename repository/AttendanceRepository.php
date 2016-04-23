<?php

/**
 * Created by PhpStorm.
 * User: Kevin Nathanael
 * Date: 4/16/2016
 * Time: 1:45 PM
 */
include_once('Repository.php');

class AttendanceRepository extends Repository
{
    public function __construct()
    {
        if($this->db == null)
            $this->init();
    }

    public function findLastAttend($id) {
        $stmt = $this->db->prepare('SELECT * FROM attendance WHERE employee_id = ? AND time_out IS NULL ORDER BY time_in DESC LIMIT 1');
        $stmt->execute(array($id));
        return $stmt;
    }

    public function setTimeIn($id) {
        $stmt = $this->db->prepare('INSERT INTO attendance VALUES(null, ?, now(), null)');
        $stmt->execute(array($id));
    }

    public function setTimeOut($id) {
        $stmt = $this->db->prepare('UPDATE attendance SET time_out = now() WHERE id = ?');
        $stmt->execute(array($id));
    }

    public function getEmployeeTime($id) {
        $stmt = $this->db->prepare('SELECT e.id, time_out, time_in FROM Employee AS e JOIN Attendance AS a ON e.id = a.employee_id WHERE e.id = ?');
        $stmt->execute(array($id));   
        return $stmt->fetchAll();
    }

}