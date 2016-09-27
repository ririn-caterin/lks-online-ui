<link  rel="stylesheet" type="text/css" href="<?=base_url();?>assets/js/DataTables/datatables.min.css"/>
<script type="text/javascript" src="<?=base_url();?>assets/js/DataTables/datatables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function ()
		{
			$('#contenttable').DataTable({
				// "scrollY"       : "200px",
				// "scrollCollapse": true,
				// "deferRender"   : true,
				"keys": true,
				"responsive": true
			});
		});
</script>

<div class="row bg-title-page">
	<div class="container">
		<div class="title-page">
			Hasil Pengerjaan
		</div>
	</div>
</div>

<div class="container nopadding-350 padding-bottom50 fontsize12">
	<table border='1' class="datatable display" id="contenttable" >
			<thead>
				<tr>
					<th class="text-center">Mata Pelajaran</th>
					<th class="text-center">LKS</th>
					<th class="text-center">Tanggal</th>
					<th class="text-center">Durasi</th>
					<th class="text-center">Nilai</th>
					<th class="text-center">Status</th>
				</tr>
			</thead>
			<?php
				if (isset($result))
				{
					foreach ($result as $row)
					{
			?>
					<tr>
						<td class="text-center"><?=$row['cat_name'];?></td>
						<td class="text-center"><?=$row['lks_name'];?></td>
						<td class="text-center"><?=$row['start_date'];?></td>
						<td class="text-center"><?=(isset($row['duration'])) ? $row['duration'] : 'tidak dikerjakan' ;?>
						<td class="text-center"><?=$row['grade'];?></td></td>
						<td class="text-center"><?=$row['pass_status'];?></td>
					</tr>
			<?php
					}
				}
				else echo "<tr><td colspan='6'>Tidak Ada Data</td></tr>";
			?>

		</table>
</div>

<!-- <div class="mainholder">
	<div class="usercontent ui-corner-all">
		<p><h1 style="color:#06F; vertical-align: bottom;">HASIL PENGERJAAN</h1></p>
		<table border='1' class="datatable display" id="contenttable" >
			<thead>
				<tr>
					<th>Mata Pelajaran</th>
					<th>LKS</th>
					<th>Tanggal</th>
					<th>Durasi</th>
					<th>Nilai</th>
					<th>Status</th>
				</tr>
			</thead>
			<?php
				if (isset($result))
				{
					foreach ($result as $row)
					{
			?>
					<tr>
						<td><?=$row['cat_name'];?></td>
						<td><?=$row['lks_name'];?></td>
						<td><?=$row['start_date'];?></td>
						<td><?=(isset($row['duration'])) ? $row['duration'] : 'tidak dikerjakan' ;?>
						<td><?=$row['grade'];?></td></td>
						<td><?=$row['pass_status'];?></td>
					</tr>
			<?php
					}
				}
				else echo "<tr><td colspan='6'>Tidak Ada Data</td></tr>";
			?>

		</table>
	</div>
</div> -->