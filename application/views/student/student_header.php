<!DOCTYPE html>
<html>
<head>
	<title>LKS ONLINE</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/main.css"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/bootstrap-min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/DataTables/Bootstrap-3.3.6/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/mycustom.css"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/validationEngine/css/validationEngine.jquery.css"/>
	<script type="text/javascript" src="<?=base_url();?>assets/js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?=base_url();?>assets/js/validationEngine/js/jquery.validationEngine.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?=base_url();?>assets/js/validationEngine/js/languages/jquery.validationEngine-id.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/js/DataTables/Bootstrap-3.3.6/js/bootstrap.js"></script>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>

<body>

<div class="container-fluid">
	<div class="row">
		<img class="img-responsive logo-header" src="<?=base_url();?>assets/images/logo.png" alt="LKS Online">
	</div>
	<div class="row under-logo">
		<div class="container">
			<div class="row welcome-login">
				<div class="col-md-6">
					<a href="<?=base_url();?>student">
						<button class="tombol-admin">Dashboard</button>
					</a>
				</div>
				<div class="col-md-6 rata-kanan">
					<div id="logout" class="" style="">
						<div class="col-md-9 nopadding font-white" style="">
							<?php
								$session = get_session_details();
								if (isset($session->studentdetails) && !empty($session->studentdetails))
								{
									$loggeduser = (object)$session->studentdetails;
									echo 'Helo, '.$loggeduser->student_name;
									$student_id = $loggeduser->student_id;
								}
							?>
						</div>
						<div class="col-md-3 nopadding" onclick="return confirm('Anda yakin akan keluar?');">
							<a href="<?=base_url();?>main_login/logout">
								<button class="tombol-logout">Logout</button>
							</a>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--ini buat kuesioner <?=base_url();?>student/questionnaire/<?=$student_id;?>-->
