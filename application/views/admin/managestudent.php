<script type="text/javascript">
	$("a.deleteuserbttn").live('click', function(e){
		e.preventDefault();
		var student_id = $(this).attr("id");

		if (confirm('Seluruh data siswa dan hasil pengerjaan LKS pada siswa ini akan terhapus! Anda yakin akan manghapus data siswa ini?'))
		{
			$.ajax({
				type: "POST",
				url: "<?=base_url();?>administrator/deletestudent",
				data: {"student_id": student_id},
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
		<div class="createnewdiv" float="right">
			<a href="<?=base_url();?>administrator/add_student" class="hover11" title="Tambah Data Siswa"><img src="<?=base_url();?>assets/admin/images/add.png"><br>Tambah Data Siswa</a>
		</div>
		<table width="670px"  border='1' class="contenttable" id="contenttable">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Kelas</th>
					<th>Status</th>
					<th>Email</th>
					<th>Username</th>
					<th colspan="2" class="center">Action</th>
				</tr>
			</thead>

			<?php
				if (isset($all_student))
				{
					foreach ($all_student as $row)
					{
						if ($row['status'] == '1') $status = 'aktif';
						else $status = 'tidak aktif';
			?>
							<tr>
								<td><?=$row['name']; ?></td>
								<td><?=$row['kelas']; ?></td>
								<td><?=ucfirst($status); ?></td>
								<td><?=$row['email']; ?></td>
								<td><?=$row['username']; ?></td>
								<td style="line-height: 5px; text-align: center">
									<a href="<?=base_url();?>administrator/edit_student/<?=$row['student_id'];?>" title="Ubah">
									<img src="<?=base_url();?>assets/admin/images/edit.png" height="16" width="16"></a>
								</td>
								<td style="line-height: 5px; text-align: center">
									<a class="deleteuserbttn" href="#" id="<?=$row['student_id'];?>" title="Hapus">
									<img src="<?=base_url();?>assets/admin/images/delete.png" height="16" width="16"></a>
								</td>
							</tr>
			<?php
					}
				}
				else echo "<tr><td colspan='7'>Tidak Ada Data</td></tr>";
			?>
		</table>
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu');?>
	</div>
</div>