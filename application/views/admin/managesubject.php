<script type="text/javascript">
	$("a.deletebttn").live('click', function(e){
		e.preventDefault();
		var cat_id = $(this).attr("id");

		if (confirm('Seluruh LKS, soal-soal, dan hasil pengerjaan LKS pada Mata Pelajaran ini akan ikut terhapus! Anda yakin akan menghapus Mata Pelajaran ini?'))
		{
			$.ajax({
				type: "POST",
				url: "<?=base_url();?>administrator/deletesubject",
				data: {"cat_id": cat_id},
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
			<a href="<?=base_url();?>administrator/add_subject" class="hover11" title="Tambah Mata Pelajaran"><img src="<?=base_url();?>assets/admin/images/add.png"><br>Tambah Mata Pelajaran</a>
		</div>
		<table width="670px"  border='1' class="contenttable" id="contenttable">
			<thead>
				<tr>
					<th>Mata Pelajaran</th>
					<th>Kelas</th>
					<th  class="center" colspan="2">Action</th>
				</tr>
			</thead>

			<?php
				if (isset($all_subject))
				{
					foreach ($all_subject as $row)
					{
			?>
				<tr>
					<td><?=$row['cat_name'];?></td>
					<td><?=$row['kelas'];?></td>
					<td style="line-height: 5px; text-align: center">
						<a href='<?=base_url();?>administrator/editsubject/<?=$row['cat_id'];?>' title="Ubah">
						<img src='<?=base_url();?>assets/admin/images/edit.png' height="16" width="16"></a>
					</td>
					<td style="line-height: 5px; text-align: center">
						<a class="deletebttn" href="#" id='<?=$row['cat_id'];?>' title="Hapus">
						<img src='<?=base_url();?>assets/admin/images/delete.png' height="16" width="16"></a>
					</td>
				</tr>
			<?php
					}
				}
				else echo '<tr><td colspan="4">Tidak Ada Data</td></tr>';
			?>
		</table>
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu');?>
	</div>
</div>