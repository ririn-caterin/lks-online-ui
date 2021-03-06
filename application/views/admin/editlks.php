<script type="text/javascript">
	$(document).ready(function()
	{
		$("#editexamform").validationEngine();
		$("#subject").chained("#kelas");
	});
</script>
<div class="mainholder">
	<div class="content ui-corner-all">
		<table>
			<td>
				<p ><a href="<?=base_url();?>administrator/all_lks" title="Kembali" class="hover11">
				<img src="<?=base_url();?>assets/admin/images/back.png" width="50" height="40"></a></p>
			</td>
			<td>
				<div class="createnewdiv">
				<p class="pagetittle">Ubah LKS</p>
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
						echo '<p id="error" class="msg error>"'.$error.'</p>';
					}
				?>
			</td>
		</table>

		<form action="" method="post" id="editexamform">
			<table>
				<tbody>
					<tr>
					<input type="hidden" name="lks_id" value="<?=$lksdetails->lks_id;?>">
						<td><div class="label">Kelas</div></td>
						<td><div class="input">
							<select id="kelas" name="kelas" class="input-text ui-corner-all validate[required]">
								<?=(isset($kelas)) ? $kelas: '';?>
							</select><?=form_error('kelas');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Mata Pelajaran</div></td>
						<td><div class="input">
							<select id="subject" name="subject" class="input-text ui-corner-all validate[required]">
								<?=(isset($subject)) ? $subject: '';?>
							</select><?=form_error('subject');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Nama LKS</div></td>
						<td><div class="input">
							<input type="text" name="lks_name" size="39" value="<?=$lksdetails->lks_name;?>"
									class="ui-corner-all input-text validate[required]">
							<?=form_error('lks_name');?>

							<!-- Hint section start-->
							<div class="hintsidebar ui-corner-all" style="float: right; font-size: 12px; margin-right: 30px">
								<span class="icon-left ui-icon ui-icon-info"></span>
								Harus unik! Berbeda dengan LKS lain.
							</div>
							<!-- Hint section end-->
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Durasi</div></td>
						<td><div class="input">
							<input type="text" name="durasi" size="39" class="ui-corner-all input-text validate[required] custom[integer]"
							value="<?=$lksdetails->duration;?>" placeholder="menit">
							<?=form_error('durasi');?>
						</div></td>
					</tr>

					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Simpan" name="savelksbttn" class="input-button ui-corner-all ui-state-default"></td>
					</tr>
				</tbody>
			</table>
		</form>

		<div class="createnewdiv" style="float:right; text-align:center">
			<a href="<?=base_url();?>administrator/mngquestion/<?=$lksdetails->lks_id;?>"
				title="Menambah/Mengubah Soal Pada LKS Ini" class="hover11">
				<img src="<?=base_url();?>assets/admin/images/question-mark.png" height="50" width="50"></a>
				<p class="pagetittle">Kelola Soal</p>
		</div>
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>