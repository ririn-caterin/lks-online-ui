<div class="row bg-title-page">
	<div class="container">
		<div class="title-page">
			Mata Pelajaran - <?=$level->lvl_name;?>
		</div>
	</div>
</div>

<div class="container nopadding-350 padding-bottom50">
	<div class="col-md-8 nopadding margin-top-bottom-10">
		<a href="<?=base_url();?>student"><button class="tombol-back">
			Back
		</button></a>
	</div>
	<div class="col-md-8 nopadding">
		<table class="table table-striped">
			<thead class="font-thead">
				<tr>
					<th class="text-center">No.</th>
					<th class="text-center">Nama Pelajaran</th>
					<th class="text-center">Jumlah LKS</th>
				</tr>
			</thead>
			<tbody>

				<?php
					if (isset($subject_category) && !empty($subject_category))
					{
						$count = 1;
						foreach ($subject_category as $subject)
						{
				?>
						<tr>
							<td class="text-center"><?=$count;?>.</td>
							<td class="text-center"><a href="<?=base_url();?>student/all_lks/<?=$subject['cat_id'];?>"><?=$subject['cat_name'];?></a></td>
							<td class="text-center"><?=$subject['jumlah_lks'];?> LKS</td>
						</tr>
						<?php
								$count ++;
						}
					}
					else echo "<tr class='text-center'><td colspan='3'>Tidak Ada Data</td></tr>";
				?>
			</tbody>
		</table>
	</div>
</div>



<!-- <div class="mainholder">
	<div class="usercontent ui-corner-all">
		<p><h1 style="color:#06F; float: left; vertical-align: bottom;">MATA PELAJARANnnnnnnnnnnn</h1></p>
		<p><a href="<?=base_url();?>student" title="Kembali" style="float: right; vertical-align: middle;" class="hover11">
						<img src="<?=base_url();?>assets/images/back.png" width="60" height="40"></a></p>
		<br>

        <table cellpadding="0" cellspacing="30" class="datatable" id="">
        	<tbody>
        		<tr>
        			<th>No.</th>
        			<th>Mata Pelajaran</th>
        			<th style="text-align:center">Jumlah LKS</th>
        		</tr>
        			<?php
	        			if (isset($subject_category))
	        			{
					        $count = 1;
							foreach ($subject_category as $subject)
							{
				    ?>
          		<tr>
	                <td><?=$count;?>.</td>
	                <td><a href="<?=base_url();?>student/all_lks/<?=$subject['cat_id'];?>"><?=$subject['cat_name'];?></a></td>
	                <td style="text-align:center"><?=$subject['jumlah_lks'];?> LKS</td>
          		</tr>
			        <?php
				        	$count ++;
				        	}
				        }
				        else echo "<tr><td colspan='3'>Tidak Ada Data</td></tr>";
			        ?>
			</tbody>
		</table>
	</div>
</div> -->
