<?php
	print_r(PDO::getAvailableDrivers());
	echo '<br/>';
	if (!defined('PDO::ATTR_DRIVER_NAME')) {
		echo 'PDO unavailable';
	}
	else {
		echo 'PDO available';
	}
	echo '<br/>';
	phpinfo();
	
?>