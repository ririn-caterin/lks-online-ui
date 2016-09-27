<script type="text/javascript">
	$(document).ready(function()
	{
  		$("#updatedetailsform").validationEngine();
	});
	/*$(document).ready(function(){
  		$("#changepasswrdform").validationEngine();
	});*/
</script>

<div class="mainholder">

	<!--Start account editing holder -->
	<div class="content ui-corner-all">
		<div class="createnewdiv">
			<p class="pagetittle">Ubah Profil Saya</p>
		</div>
		<?php
			if(isset($success)) echo '<p id="success" class="msg done">'.$success.'</p>';
			if(isset($error)) echo '<p id="error" class="msg error">'.$error.'</p>';
		?>

		<form action="" method="post" id="updatedetailsform">
			<table>
	    		<tbody>
	     			<tr>
					    <td><div class="label">Username</div></td>
					    <td>
					    	<input type="hidden" name="admin_id" value="<?=$admindetails->admin_id;?>">
					    	<div class="input">
						    	<input type="text" name="username" value="<?=$admindetails->username;?>" readonly="readonly" style="background:#ddd" size="39" class="ui-corner-all input-text validate[required] minSize[3] maxSize[20]">
						    	<?=form_error('username'); ?>
						   	</div>
						</td>
	    			</tr>
				    <tr>
					    <td><div class="label">Nama</div></td>
					    <td>
					    	<div class="input">
					    		<input type="text" name="name" size="39" value="<?=$admindetails->name;?>" class="ui-corner-all input-text validate[required]">
					    		<?=form_error('name'); ?>
					    	</div>
					    </td>
					</tr>
				    <tr>
					    <td><div class="label">Email</div></td>
					    <td>
					    	<div class="input">
						    	<input type="text" name="email" size="39" value="<?=$admindetails->email;?>" class="ui-corner-all input-text validate[required, custom[email]]">
						    	<?=form_error('email'); ?>
							</div>
						</td>
				    </tr>
				     <tr>
					    <td><div class="label">Phone</div></td>
					    <td>
					    	<div class="input">
						    	<input type="text" name="phone" size="39" value="<?=$admindetails->phone;?>" class="ui-corner-all input-text validate[required]">
						    	<?=form_error('phone'); ?>
							</div>
						</td>
				    </tr>
					<tr>
						<td><div class="label">Masukkan password untuk konfirmasi perubahan</div></td>
					    <td>
					    	<div class="input">
					    		<input type="password" name="currentpassword" size="39" class="ui-corner-all input-text validate[required] minSize[6] maxSize[20]">
					    		<?=form_error('currentpassword'); ?>
				    		</div>
				    	</td>
				    </tr>
				    <tr>
					 	<td>&nbsp;</td>
					 	<td><input type="submit" value="Simpan" name="updateprofilebttn" class="input-button ui-corner-all ui-state-default"></td>
				    </tr>
    			</tbody>
	   		</table>
	   	</form>
	   	<!-- end of account update form-->
	</div>

	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu');?>
	</div>
</div>
