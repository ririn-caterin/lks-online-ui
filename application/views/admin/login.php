<?php $this->load->view('admin/header'); ?>
<script>
	$(document).ready(function()
	{
		$("#loginform").validationEngine();
	}
	);
</script>

<div class="mainholder">
	<!--start login holder-->
	<div class="loginholder">
		<h1 style="text-align: center">Administrator - Login</h1>

		<div id="login" style="width: 85%;">
			<?php if (isset($error)) echo '<p class="msg error">'.$error.'</p>'?>
			<p class="tip">
				Jika anda <strong>bukan administrator</strong> silahkan kembali ke 
				<a href="<?=base_url();?>" title="Halaman Utama">Halaman Utama</a>
			</p>

			<form method="post" action="<?=base_url();?>admin/login" id="loginform">
				<div class="input" style="margin-left: 17%">
				<!-- 	<strong>Username </strong> -->
					<input type="text" name="username" class="validate[required] input-text ui-corner-all" placeholder="Username">
				</div>
				<div class="input" style="margin-left: 17%">
					<!-- <strong>Password </strong> -->
					<input type="password" name="password" class="validate[required] input-text ui-corner-all" placeholder="Password">
				</div>
				<br>
				<div style="float:right; margin-right: 17.5%;">
					<input type="submit" value="Log In" name="loginbttn" class="input-button ui-corner-all ui-state-active" title="Masuk">
				</div>
			</form>
			<br clear="all">

		</div>

	</div>
	<div class="clear">&nbsp;</div>
</div>

<?php $this->load->view('footer');?>