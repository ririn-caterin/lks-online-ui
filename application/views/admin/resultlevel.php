<style type="text/css">
	a.tombol-like {
    padding:5px;
    background-color: #76ADDE;
    border: 0px;
}
</style>

<div class="mainholder">
	<div class="content ui-corner-all">
		<table>
			<tr>
				<td>
					<p ><a href="<?=base_url();?>administrator" title="Kembali" class="hover11">
					<img src="<?=base_url();?>assets/admin/images/back.png" width="50" height="40"></a></p>
				</td>
				<td><div class="createnewdiv">
					<p class="pagetittle">Lihat Hasil</p>
				</div></td>
			</tr>
		</table>

		<table width="670px" border='1' class="contenttable" id="contenttable">
			<thead>
				<tr>
					<th>Kelas</th>
					<th>Jumlah Siswa Aktif</th>
				</tr>
			</thead>

			<?php
				if (isset($all_level))
				{
					foreach ($all_level as $row)
					{
			?>
				<tr>
					<td >
						<a href='<?=base_url();?>administrator/resultstudent/<?=$row['lvl_id'];?>'  style="line-height:32px; color:white;"
							class="ui-corner-all tombol-like" title="Lihat"><?=$row['lvl_name'];?></a>
					</td>
					<td><?=$row['jumlah_siswa'];?> orang</td>
				</tr>
			<?php
					}
				}
				else echo "<tr><td colspan='2'>Tidak Ada Data</td></tr>";
			?>
		</table>
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>