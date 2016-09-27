<script>
	$(document).ready(function (){
		$("#changepasswordform").validationEngine();
	})
</script>

<div class="mainholder">
	<div class="content ui-corner-all">
		<div class="createnewdiv">
			<p class="pagetittle">Ganti Password</p>
		</div>

		<?php
			if (isset($success))
			{
				echo '<p id="success" class="msg done">'.$success.'</p>';
			}
			if (isset($error))
			{
				echo '<p id="error" class="msg error">'.$error.'</p>';
			}
		?>
		<form action="" method="post" id="changepasswordform">
			<table>
				<tbody>
					<tr>
						<td><div class="label">Username</div></td>
						<td>
							<input type="hidden" name="admin_id" value="<?=$admindetails->admin_id;?>">
							<div class="input">
								<input type="text" name="username" value="<?=$admindetails->username;?>" readonly="readonly" style="background: #ddd" class="ui-corner-all input-text">
								<?=form_error('username');?>
							</div>
						</td>
					</tr>
					<tr>
						<td><div class="label">Password Baru</div></td>
						<td><div class="input">
							<input type="password" name="newpassword" id="newpassword" class="ui-corner-all input-text validate[required] minSize[6] maxSize[20]">
							<?=form_error('newpassword');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Ulangi Password Baru</div></td>
						<td><div class="input">
							<input type="password" name="confirmnewpassword" class="ui-corner-all input-text validate[required] equals[newpassword]">
							<?=form_error('confirmnewpassword');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Masukkan password saat ini untuk konfirmasi perubahan</div></td>
						<td><div class="input">
							<input type="password" name="currentpassword" class="ui-corner-all input-text validate[required]">
							<?=form_error('currentpassword');?>
						</div></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Ganti Password" name="changepasswordbttn" class="input-button ui-corner-all ui-state-default"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>

	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>
