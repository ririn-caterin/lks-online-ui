<div class="mainholder">
	<div class="content ui-corner-all">
		<table width="700px" class="dashboard">
			<tbody>
				<tr>
					<td width="175" title="Data Siswa"><a href="<?=base_url();?>administrator/student" class="hover11">
						<img src="<?=base_url();?>assets/admin/images/student-data-icon.png"><br/>Data Siswa</a></td>
					<td width="175" title="LKS"><a href="<?=base_url();?>administrator/all_lks" class="hover11">
						<img src="<?=base_url();?>assets/admin/images/lks.png"><br/>LKS</a></td>
					<td width="175" title="Mata Pelajaran"><a href="<?=base_url();?>administrator/subject" class="hover11">
						<img src="<?=base_url();?>assets/admin/images/subject.png"><br/>Mata Pelajaran</a></td>
					<td width="175" title="Data Administrator"><a href="<?=base_url();?>administrator/all_admin" class="hover11">
						<img src="<?=base_url();?>assets/admin/images/admin.png"><br/>Data Administrator</a></td>
				</tr>
				<tr>
					<td title="Tambah Data Siswa"><a href="<?=base_url();?>administrator/add_student" class="hover11">
						<img src="<?=base_url();?>assets/admin/images/add-student-data-icon.png"><br/>Tambah Data Siswa</a></td>
					<td title="Tambah LKS"><a href="<?=base_url();?>administrator/add_lks" class="hover11">
						<img src="<?=base_url();?>assets/admin/images/add-lks.png"><br/>Tambah LKS</a></td>
					<td title="Lihat Hasil"><a href="<?=base_url();?>administrator/result" class="hover11">
						<img src="<?=base_url();?>assets/admin/images/hasil.png"><br/>Lihat Hasil</a></td>
					<td title="Ubah Password"><a href="<?=base_url();?>administrator/changepassword" class="hover11">
						<img src="<?=base_url();?>assets/admin/images/password.png"><br/>Ubah Password</a></td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>