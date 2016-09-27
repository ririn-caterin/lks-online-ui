<?php $this->load->view('default_header'); ?>
<script>
	$(document).ready(function()
	{
		$("#loginform").validationEngine();
	}
	);
</script>

<div class="row bg-login">
	<form action="<?=base_url();?>main_login/login" method="post" id="loginform">
		<div class="kotak-login marginatas">
			<div class="row font-loginsiswa">
				Login Siswa
			</div>
			<div class="">
				<?php
				if (isset($error)) echo '<p class="msg error">'.$error.'</p>';
				?>
				<input type="text" name="username" class="ui-corner-all input-text validate[required] width100" placeholder="Username">
			</div>
			<div class="">
				<input type="password" name="password" class="ui-corner-all input-text validate[required] width100 marginatas15" placeholder="Password">
			</div>
			<div class="marginatas15">
				<input type="submit" value="Login" name="loginbttn" class="tombol-login ui-corner-all ui-state-default">
			</div>
		</div>
	</form>
</div>
<?php $this->load->view('footer'); ?>
