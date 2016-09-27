<!DOCTYPE html>
<html>
<head>
	<title>LKS ONLINE</title>

	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/admin.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/mycustom.css"/>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/validationEngine/css/validationEngine.jquery.css">
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/admin/css/jquery-ui.css">
	<script type="text/javascript" src="<?=base_url();?>assets/js/validationEngine/js/jquery-1.8.2.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?=base_url();?>assets/js/validationEngine/js/jquery.validationEngine.js"></script>
	<script type="text/javascript" charset="utf-8" src="<?=base_url();?>assets/js/validationEngine/js/languages/jquery.validationEngine-id.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/admin/js/datatable/jquery.dataTables.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/admin/js/jquery-ui.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/admin/js/tinymce/tinymce.min.js"></script>
	<script type="text/javascript" src="<?=base_url();?>assets/admin/js/jquery.chained.min.js"></script>
	<style type="text/css">
		.hover11{
			-webkit-transform: scale(1);
			transform: scale(1);
		}
		.hover11 :hover{
			-webkit-transform: scale(1.2);
			transform: scale(1.2);
			opacity: 1;
			-webkit-animation: flash 1.5s;
			animation: flash 1.5s;
		}
		@-webkit-keyframes flash {
			0% { opacity: .4; }
			100% { opacity: 1; }
		}
		@keyframes flash {
			0% { opacity: .4; }
			100% { opacity: 1; }
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function ()
			{
				$('#contenttable').selectableDataTable({
					iDisplayLength: 10,
					bAutowidth: true
				});
			});
	</script>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>

	<div class="header">
		<div id="logo"><img src="<?=base_url();?>assets/images/logo.png" width="770px" style="display:block; margin-left: auto; margin-right: auto; margin: auto;" alt="LKS Online"></div>
		<div class="main-menu-box ui-widget ui-widget-header" style="padding: 5px">
			<div class="container">
				<?php
					$session = get_session_details();
					if (isset($session->admindetails) && !empty($session->admindetails))
					{
						$loggedadmin = (object)$session->admindetails;
						$admin_id = $loggedadmin->admin_id;
				?>
				<div  class="main-menu" style="padding-top:2.5px; text-align: right; padding-right:15%; float: right;">
					Hello, <?=$loggedadmin->admin_name;?> <a onclick="return confirm('Anda yakin akan keluar? Semua progres yang belum selesai tidak akan tersimpan.');" style="padding: 5px; text-decoration: none"
					class="ui-corner-all ui-state-active" href="<?=base_url();?>admin/logout">Logout</a>
				</div>
				<!--ini href di atas <?=base_url();?>admin/logout-->
				<!--<?=base_url();?>administrator/questionnaire/<?=$admin_id;?>-->
				<div class="main-menu" style="padding-top:2.5px; padding-left: 200px; float: left">Status: Administrator</div>
				<?php
					}
				?>
				<div class="clear">&nbsp;</div>
			</div>
		</div>
	</div>
