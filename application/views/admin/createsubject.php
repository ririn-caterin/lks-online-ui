<script>
	$(document).ready(function()
	{
		$("#createcategoryform").validationEngine();
	});
</script>

<div class="mainholder">
	<div class="content ui-corner-all">
		<table>
			<td>
				<p ><a href="<?=base_url();?>administrator/subject" title="Kembali" class="hover11">
				<img src="<?=base_url();?>assets/admin/images/back.png" width="50" height="40"></a></p>
			</td>
			<td>
				<div class="createnewdiv">
				<p class="pagetittle">Tambah Mata Pelajaran</p>
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

		<form action="" method="post" id="createcategoryform">
			<table>
				<tbody>

					<tr>
						<td><div class="label">Mata Pelajaran</div></td>
						<td><div class="input">
							<input type="text" name="cat_name" size="39" class="ui-corner-all input-text validate[required]">
							<?=form_error('cat_name');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Kelas</div></td>
						<td><div class="input">
								<?=(isset($kelas)) ? $kelas: '';?>
								<?=form_error('kelas[]');?>
						</div></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Simpan" name="savecatbttn" class="input-button ui-corner-all ui-state-default"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>