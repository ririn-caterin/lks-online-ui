<!DOCTYPE html>
<html>
<head>
	<title>LKS ONLINE</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/admin.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/mycustom.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/bootstrap-min.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/validationEngine/css/validationEngine.jquery.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/jquery-ui.css">
	<script type="text/javascript" src="<?=base_url();?>assets/js/validationEngine/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?=base_url();?>assets/js/validationEngine/js/jquery.validationEngine.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?=base_url();?>assets/js/validationEngine/js/languages/jquery.validationEngine-id.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/admin/js/datatable/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/admin/js/jquery-ui.js"></script>
	<script type="text/javascript">
		$(document).ready(function ()
			{
				$('#contenttable').selectDataTable({
					iDisplayLength: 6,
					bAutowidth: true
				});
			});
	</script>
</head>


<body>
	<div class="header">
		<div id="logo"><img src="<?=base_url();?>assets/images/logo.png" width="770px" style="margin:8px" alt="LKS Online"></div>
		<div class="main-menu-box ui-widget ui-widget-header" style="padding: 5px">
			<div class="container">
				<div class="main-menu" style="padding-top:2.5px; text-align: right; padding-right:15%; float: right">
					<?php
						$session = get_session_details();
						if (isset($session->admindetails) && !empty($session->admindetails))
						{
							$loggedadmin = (object)$session->admindetails;
							echo 'Hello, '.$loggedadmin->admin_name.' '.'<a style="padding: 5px; text-decoration: none" class="ui-corner-all ui-state-active" href="'.base_url().'admin/logout">Logout</a>';
						}
					?>
				</div>
				<div class="main-menu" style="padding-top:2.5px; padding-left: 200px; float: left">Status: Administrator</div>
				<div class="clear">&nbsp;</div>
			</div>
		</div>
	</div>
