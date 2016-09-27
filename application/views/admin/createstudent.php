<script>
	$(document).ready(function()
	{
		$("#regform").validationEngine();
	});
</script>

<div class="mainholder">
	<div class="content ui-corner-all">
		<table>
			<tr>
				<td>
					<p ><a href="<?=base_url();?>administrator/student" title="Kembali" class="hover11">
							<img src="<?=base_url();?>assets/admin/images/back.png" width="50" height="40"></a></p>
				</td>
				<td>
					<div class="createnewdiv">
						<p class="pagetittle"> Tambah Siswa Baru</p>
					</div>
				</td>
				<td>
					<div>
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
					</div>
				</td>
			</tr>
		</table>

		<form action="" method="post" id="regform">
			<table>
				<tbody>
					<tr>
						<td><div class="label">Kelas</div></td>
						<td>
							<div class="input">
									<select name="kelas" class="input-text ui-corner-all validate[required]">
										<?=(isset($kelas)) ? $kelas: '';?>
									</select><?=form_error('kelas'); ?>
						    </div>
						</td>
					</tr>
					<tr>
						<td><div class="label">Nama</div></td>
						<td><div class="input">
							<input type="text" name="name" value="<?php if (isset($reset)) echo ($reset) ? "" : set_value('name');?>"
								   class="ui-corner-all input-text validate[required]"><?=form_error('name');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Email</div></td>
						<td><div class="input">
							<input type="text" name="email" value="<?php if (isset($reset)) echo ($reset) ? "" : set_value('email');?>"
								   class="ui-corner-all input-text validate[required, custom[email]]"><?=form_error('email');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Username</div></td>
						<td><div class="input">
							<input type="text" name="username" value="<?php if (isset($reset)) echo ($reset) ? "" : set_value('username');?>"
								   class="ui-corner-all input-text validate[required] minSize[3] maxSize[20]"><?=form_error('username');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Password</div></td>
						<td><div class="input">
							<input type="password" name="password" id="password"
								   class="ui-corner-all input-text validate[required] minSize[6] maxSize[20]"><?=form_error('password');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Ulangi Password</div></td>
						<td><div class="input">
							<input type="password" name="confirmpassword"
								   class="ui-corner-all input-text validate[required] equals[password]"><?=form_error('confirmpassword');?>
						</div></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Buat Akun Siswa" name="registerbttn"
								   class="input-button ui-corner-all ui-state-default"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>