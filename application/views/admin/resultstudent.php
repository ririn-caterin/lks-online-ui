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
					<p ><a href="<?=base_url();?>administrator/result" title="Kembali" class="hover11">
					<img src="<?=base_url();?>assets/admin/images/back.png" width="50" height="40"></a></p>
				</td>
				<td><div class="createnewdiv">
					<p class="pagetittle"> Hasil : <?=$lvldetails->lvl_name;?></p>
				</div></td>
			</tr>
		</table>

		<table width="670px" border='1' class="contenttable" id="contenttable">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Jumlah Pengerjaan</th>
					<th>Lulus</th>
					<th>Action</th>
				</tr>
			</thead>

			<?php
				if (isset($all_student))
				{
					foreach ($all_student as $row)
					{
			?>
				<tr>
					<td><?=$row['name'];?></td>
					<td><?=$row['attempted'];?> kali</td>
					<td><?=$row['passed'];?> kali</td>
					<td>
						<a href='<?=base_url();?>administrator/resultlks/<?=$row['student_id'];?>'  style="line-height:32px; color:white;"
							class="ui-corner-all tombol-like" title="Lihat">Lihat</a>
					</td>
				</tr>
			<?php
					}
				}
				else echo "<tr><td colspan='4'>Tidak Ada Data</td></tr>";
			?>
		</table>
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>