<script>
	$(document).ready(function()
	{
		$("#updatedetailsform").validationEngine();
	});
	$(document).ready(function()
	{
		$("#changepasswrdform").validationEngine();
	});
</script>
<div class="mainholder">
	<!--Start account edit holder-->
	<div class="content ui-corner-all">
		<table>
			<tr>
				<td>
					<p ><a href="<?=base_url();?>administrator/student" title="Kembali" class="hover11">
					<img src="<?=base_url();?>assets/admin/images/back.png" width="50" height="40"></a></p>
				</td>
				<td>
					<div class="createnewdiv">
						<p class="pagetittle"> Ubah Profil Siswa</p>
					</div>
				</td>
				<td>
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
				</td>
			</tr>
		</table>
		<form action="" method="post" id="updatedetailsform">
			<table>
				<tbody>
					<tr>
						<td><div class="label">Username</div></td>
						<td>
							<input type="hidden" name="student_id" value="<?=$studentdetails->student_id;?>">
							<div class="input">
								<input type="text" name="username" value="<?=$studentdetails->username;?>" readonly="readonly" style="background: #ddd" size="39" class="ui-corner-all input-text validate[required] minSize[3] maxSize[20]"><?=form_error('username')?>
							</div>
						</td>
					</tr>
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
							<input type="text" name="name" size="39" value="<?=$studentdetails->name;?>"
							class="ui-corner-all input-text validate[required]"><?=form_error('name')?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Email</div></td>
						<td><div class="input">
							<input type="text" name="email" size="39" value="<?=$studentdetails->email;?>"
							class="ui-corner-all input-text validate[required, custom[email]]"><?=form_error('email')?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Status</div></td>
						<td><div class="input">
							<select name="status" class="input-text ui-corner-all validate[required]">
								<?php
									$select = '<option value=""> - - Pilih -  </option>';
									$selected_option = ($selected == $row[$cat_id]) ? 'selected = "selected" ':' ';
									if ($studentdetails->status == 1)
									{
										$status = "Aktif";
								?>
										<?=$select.='<option value="'.$studentdetails->status.'" '.$selected_option.'>'.$status.'</option>';?>
										<option value='0'> Tidak Aktif </option>
								<?php
									}
									else
									{
										$status = "Tidak Aktif"
								?>
										<?=$select.='<option value="'.$studentdetails->status.'" '.$selected_option.'>'.$status.'</option>';?>
										<option value='1'>Aktif </option>
								<?php } ?>
							</select><?=form_error('status')?>
						</td></div>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Ubah Data Siswa" name="updateprofilebttn"
						class="input-button ui-corner-all ui-state-default"></td>
					</tr>
				</tbody>
			</table>
		</form>
		<br>
		<!-- end of account update form-->
	    <!-- start of change password form-->
		<form action="" method="post" id="changepasswrdform">
			<table>
				<tbody>
				<!-- <tr>
						<td><div class="label">Password</div></td>
						<td>
							<input type="hidden" name="student_id" value="<?=$studentdetails->student_id;?>">
							<div class="input">
								<input type="text" name="password" value="<?=$studentpassword;?>" readonly="readonly" style="background: #ddd" size="39" class="ui-corner-all input-text"><?=form_error('password')?>
							</div>
						</td>
					</tr> -->
					<tr>
						<td><div class="label">Password Baru</div></td>
						<td>
							<input type="hidden" name="student_id" value="<?=$studentdetails->student_id;?>">
							<div class="input">
								<input type="password" name="newpassword" id="newpassword" size="39"
								class="ui-corner-all input-text validate[minSize[6], maxSize[20]]"><?=form_error('newpassword')?>
							</div>
						</td>
						<td></td>
					</tr>
					<tr>
						<td><div class="label">Konfirmasi Password Baru</div></td>
						<td><div class="input">
							<input type="password" name="confirmnewpassword" id="confirmnewpassword" size="39"
							class="ui-corner-all input-text validate[equals[newpassword]]"><?=form_error('confirmnewpassword')?>
						</div></td>
						<td></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Ubah Password" name="changepasswdbttn" class="input-button ui-corner-all ui-state-default"></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</form>
		<!--end change password form -->
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>