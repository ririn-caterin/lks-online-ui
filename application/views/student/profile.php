<script type="text/javascript">
	$(document).ready(function(){
  		$("#regform").validationEngine();
	});
	$(".select").change(function (){
    alert($(this).val());
});
</script>

<div class="row bg-title-page">
	<div class="container">
		<div class="title-page">
			Ubah Profil
		</div>
	</div>
</div>

<div class="container nopadding-350 padding-bottom50">
	<div class="col-md-8 nopadding">
		<?php
			if(isset($success)) echo '<p id="success" class="msg done">'.$success.'</p>';
			if(isset($error)) echo '<p id="error" class="msg error">'.$error.'</p>';
		?>
		<form action="" method="post" id="regform">
			<div class="row">
				<div class="col-md-3 margin-top5">
					Username
				</div>
				<div class="col-md-4">
					<input type="hidden" name="student_id" value="<?=$studentdetails->student_id;?>">
					<div class="">
						<input type="text" name="username" value="<?=$studentdetails->username;?>" readonly="readonly" class="ui-corner-all input-text validate[required] minSize[3] maxSize[20]"
						style=" background-color : #d1d1d1;"><?=form_error('username'); ?>
					</div>
				</div>
			</div>
			<div class="row margin-top-bottom10">
				<div class="col-md-3 margin-top5">
					Nama
				</div>
				<div class="col-md-4">
					<div class="">
						<input type="text" name="name" value="<?=$studentdetails->name;?>" class="ui-corner-all input-text validate[required]"><?=form_error('name'); ?>
					</div>
				</div>
			</div>
		<!-- 	<div class="row margin-top-bottom10">
				<div class="col-md-3 margin-top5">
					Kelas
				</div>
				<div class="col-md-4">
					<div class="input">
						<select name="kelas" class="input-text ui-corner-all validate[required]">
							<?=(isset($kelas)) ? $kelas: '';?>
						</select><?=form_error('kelas');?>
					</div>
				</div>
			</div> -->
			<div class="row margin-top-bottom10">
				<div class="col-md-3 margin-top5">
					Email
				</div>
				<div class="col-md-4">
					<div class="input">
						<input type="text" name="email" value="<?=$studentdetails->email;?>" class="ui-corner-all input-text validate[required, custom[email]]"><?=form_error('email'); ?>
				</div>
				</div>
			</div>
			<div class="row margin-top-bottom10">
				<div class="col-md-3 margin-top5">
					Password Baru
				</div>
				<div class="col-md-4">
					<div class="input">
						<input type="password" name="newpassword" id="newpassword"  class="ui-corner-all input-text minSize[6] maxSize[20]"><?=form_error('newpassword'); ?>
					</div>
				</div>
				<div class="col-md-5 rubah-password margin-top5">
					*(Kosongkan jika tidak ingin merubah password)
				</div>
			</div>
			<div class="row margin-top-bottom10">
				<div class="col-md-3 margin-top5">
					Ulangi Password Baru
				</div>
				<div class="col-md-4">
					<div class="input">
						<input type="password" name="confirmnewpassword" class="ui-corner-all input-text validate[equals[newpassword]]"><?=form_error('confirmnewpassword'); ?>
					</div>
				</div>
				<div class="col-md-5 rubah-password margin-top5">
					*(Kosongkan jika tidak ingin merubah password)
				</div>
			</div>
			<div class="row margin-top-bottom10">
				<div class="col-md-3 margin-top5">
					Masukkan Password saat ini
				</div>
				<div class="col-md-3">
					<div class="input">
						<input type="password" name="currentpassword" size="39" class="ui-corner-all input-text validate[required]"><?=form_error('currentpassword'); ?>
					</div>
				</div>
			</div>
			<div class="row margin-top-bottom10">
				<div class="col-md-3">

				</div>
				<div class="col-md-3">
					<input type="submit" value="Update" name="updateprofilebttn" class="tombol-admin">
				</div>
			</div>
		</form>
	</div>
</div>

<!-- <div class="mainholder">
	<div class="loginholder">
		<div class="logincontent ui-corner-all">
			<h1 class="w3-page-label">Ubah Profil</h1>
			<?php
				if(isset($success)) echo '<p id="success" class="msg done">'.$success.'</p>';
				if(isset($error)) echo '<p id="error" class="msg error">'.$error.'</p>';
			?>

			<form action="" method="post" id="regform">
				<table>
		    		<tbody>
		     			<tr>
						    <td><div class="label">Username</div></td>
						    <td>
						    	<input type="hidden" name="student_id" value="<?=$studentdetails->student_id;?>">
						    	<div class="input">
							    	<input type="text" name="username" value="<?=$studentdetails->username;?>" readonly="readonly" style="background:#ddd" size="39" class="ui-corner-all input-text validate[required] minSize[3] maxSize[20]"><?=form_error('username'); ?>
							   	</div>
							</td>
		    			</tr>
					    <tr>
						    <td><div class="label">Nama</div></td>
						    <td>
						    	<div class="input">
						    		<input type="text" name="name" size="39" value="<?=$studentdetails->name;?>" class="ui-corner-all input-text validate[required]"><?=form_error('name'); ?>
						    	</div>
						    </td>
						</tr>
						<tr>
						<td><div class="label">Kelas</div></td>
						<td><div class="input">
							<select name="kelas" class="input-text ui-corner-all validate[required]">
								<?=(isset($kelas)) ? $kelas: '';?>
							</select><?=form_error('kelas');?>
						</div></td>
					</tr>
					    <tr>
						    <td><div class="label">Email</div></td>
						    <td>
						    	<div class="input">
							    	<input type="text" name="email" size="39" value="<?=$studentdetails->email;?>" class="ui-corner-all input-text validate[required, custom[email]]"><?=form_error('email'); ?>
								</div>
							</td>
					    </tr>
					    <tr>
							<td><div class="label">Password Baru<br/><span style="font-style:italic;color:green">(Kosongkan jika tidak ingin merubah password)</span></div></td>
					    	<td>
					    		<div class="input">
					    			<input type="password" name="newpassword" id="newpassword" size="39" class="ui-corner-all input-text minSize[6] maxSize[20]"><?=form_error('newpassword'); ?>
					    		</div>
					    	</td>
					    </tr>
					    <tr>
					    	<td><div class="label">Ulangi Password Baru</div></td>
					    	<td>
					    		<div class="input">
					    			<input type="password" name="confirmnewpassword" size="39" class="ui-corner-all input-text validate[equals[newpassword]]"><?=form_error('confirmnewpassword'); ?>
					    		</div>
					    	</td>
					    </tr>
					    <tr>
						    <td><div class="label">Masukkan password saat ini untuk mengonfirmasi perubahan</div></td>
						    <td>
						    	<div class="input">
						    		<input type="password" name="currentpassword" size="39" class="ui-corner-all input-text validate[required]"><?=form_error('currentpassword'); ?>
						    	</div>
						    </td>
					    </tr>
					    <tr>
						 	<td>&nbsp;</td>
						 	<td><input type="submit" value="Update akun" name="updateprofilebttn" class="input-button ui-corner-all ui-state-default"></td>
					    </tr>
	    			</tbody>
		   		</table>
		   	</form>
		</div>
	</div>
	<div class="clear">&nbsp;</div>
</div> -->
