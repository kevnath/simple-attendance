<!DOCTYPE html>
<html>
<head>
	<title>Manage Attendance</title>
	<link rel="stylesheet" href="assets/node_modules/bootstrap/dist/css/bootstrap.min.css" />
	<link rel="stylesheet" href="assets/css/style.css" />
	<script type="text/javascript" src="assets/node_modules/jquery/dist/jquery.min.js" ></script>
	<script type="text/javascript" src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js" ></script>
	<script type="text/javascript" src="assets/js/admin.js" ></script>
</head>
<body>
	<?php
		include('repository/EmployeeRepository.php');

		$obj = new EmployeeRepository();
		$employees = $obj->findAllEmployee()->fetchAll();
	?>
	<div class="container">
		<div>
			<select id='select-emp' class="form-control">
				<option value="-1">-- Pilih karyawan --</option>
				<?php
					foreach($employees as $employee) {
				?>
						<option value="<?= $employee['id'] ?>"><?= $employee['id'].' - '.$employee['name'] ?></option>
				<?php
					}
				?>
			</select>
		</div>
		<div>
			<table id='table-attendance' class="table table-striped table-bordered table-hovered">
				<thead>
					<th>Time In</th>
					<th>Time Out</th>
				</thead>
				<tbody id='table-attend-body'>
					<tr>
						<td colspan="2">No data</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>