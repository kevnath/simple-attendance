<?php

	include('repository/AttendanceRepository.php');

	$id = trim($_POST['id']);
	$obj = new AttendanceRepository();
	$data = $obj->getEmployeeTime($id);
	echo json_encode($data);