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
					<p ><a href="<?=base_url();?>administrator/resultstudent/<?=$studentdetails->lvl_id;?>" title="Kembali" class="hover11">
					<img src="<?=base_url();?>assets/admin/images/back.png" width="50" height="40"></a></p>
				</td>
				<td><div class="createnewdiv">
					<p class="pagetittle">Hasil : <?=$studentdetails->name;?> / <?=$studentdetails->lvl_name;?></p>
				</div></td>
			</tr>
		</table>

		<table width="670px" border='1' class="contenttable" id="contenttable">
			<thead>
				<tr>
					<th>LKS</th>
					<th>Tanggal</th>
					<th>Mulai</th>
					<th>Selesai</th>
					<th>Keterangan</th>
					<th>Nilai</th>
					<th>Action</th>
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
					<td><?=date("j F Y",strtotime($row['start_time']));?></td>
					<td><?=date("H:i",strtotime($row['start_time']));?></td>
					<td>
						<?php if(date($row['end_time']) == '0000-00-00 00:00:00'){ ?>
							tidak dikerjakan
						<?php } else{ ?>
							<?=date("H:i",strtotime($row['end_time']));?>
						<?php } ?>
					</td>
					<td><?=$row['pass_status'];?></td>
					<td><?=$row['grade'];?></td>
					<td>
						<a href='<?=base_url();?>administrator/resultquestion/<?=$row['lr_id'];?>'  style="line-height:32px; color:white;"
							class="ui-corner-all tombol-like" title="Lihat">Lihat</a>
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
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>