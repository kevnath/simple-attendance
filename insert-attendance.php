<?php
/**
 * Created by PhpStorm.
 * User: Kevin Nathanael
 * Date: 4/16/2016
 * Time: 11:49 AM
 */
    include ('repository/EmployeeRepository.php');
    include ('repository/AttendanceRepository.php');

    $data = trim($_POST['id']);
    $repoEmployee = new EmployeeRepository();
    $row = count($repoEmployee->findEmployeeById($data)->fetchAll());

    if($row <= 0) {
        echo 'ID tidak ditemukan';
    }
    else {

        $att = new AttendanceRepository();
        $objAtt = $att->findLastAttend($data);
        date_default_timezone_set('Asia/Jakarta');

        if($objAtt->rowCount() == 0) {
            $att->setTimeIn($data);
            echo 'Masuk pada '.date('d F Y H:i:s');
        }
        else {
            $idTransaction = $objAtt->fetch(PDO::FETCH_ASSOC);
            $att->setTimeOut($idTransaction['id']);
            echo 'Keluar pada '.date('d F Y H:i:s');
        }

    }
