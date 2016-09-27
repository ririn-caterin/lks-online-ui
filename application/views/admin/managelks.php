<script type="text/javascript">
	$("a.deletebttn").live('click', function(e){
		e.preventDefault();
		//var lks_id = this.id;
		var lks_id = $(this).attr("id");

		if (confirm('Seluruh soal dan hasil pengerjaan siswa pada LKS ini akan ikut terhapus! Anda yakin akan menghapus LKS ini?'))
		{
			$.ajax({
				type: "POST",
				url: "<?=base_url();?>administrator/deletelks",
				data: {"lks_id": lks_id },
				dataType: 'json',
				success: function(text)
				{
					alert(text);
					location.reload();
				},
				error: function(text)
				{
					alert("Terdapat error, hubungi Superadmin!");
					location.reload();
				}
			});
		}
	});
</script>

<div class="mainholder">
	<div class="content ui-corner-all">
		<div class="createnewdiv">
			<a href="<?=base_url();?>administrator/add_lks" class="hover11" title="Tambah LKS"><img src="<?=base_url();?>assets/admin/images/add.png"><br>Tambah LKS</a>
		</div>
		<table width="670px" border='1' class="contenttable" id="contenttable">
			<thead>
				<tr>
					<th>Lembar Kerja Siswa</th>
					<th>Mata Pelajaran</th>
					<th>Kelas</th>
					<th>Durasi</th>
					<th colspan="2" class="center">Action</th>
				</tr>
			</thead>

			<?php
				if (isset($all_lks))
				{
					foreach ($all_lks as $row)
					{
			?>
				<tr>
					<td><?=$row['lks_name'];?></td>
					<td><?=$row['mata_pelajaran'];?></td>
					<td><?=$row['kelas'];?></td>
					<td><?=$row['duration'];?> menit</td>
					<td  style="line-height: 5px; text-align: center">
						<a href='<?=base_url();?>administrator/editlks/<?=$row['lks_id'];?>' title="Ubah">
						<img src='<?=base_url();?>assets/admin/images/edit.png' height="16" width="16"></a>
					</td>
					<td style="line-height: 5px; text-align: center">
						<a class="deletebttn" href="#" id='<?=$row['lks_id'];?>' title="Hapus">
						<img src='<?=base_url();?>assets/admin/images/delete.png' height="16" width="16"></a>
					</td>
				</tr>
			<?php
					}
				}
				else echo "<tr><td colspan='6'>Tidak Ada Data</td></tr>";
			?>
		</table>
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>