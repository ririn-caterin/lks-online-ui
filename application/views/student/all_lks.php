<div class="row bg-title-page">
	<div class="container">
		<div class="title-page">
			LKS <?=$subjectdetails->cat_name;?>
		</div>
	</div>
</div>

<div class="container nopadding-350 padding-bottom50">
	<div class="col-md-10 nopadding margin-top-bottom-10">
		<a href="<?=base_url();?>student/subject_category"><button class="tombol-back">
			Back
		</button></a>
	</div>
	<div class="col-md-10 nopadding">
		<table class="table table-striped">
			<thead class="font-thead">
				<tr>
					<th class="text-center">No.</th>
					<th class="text-center">LKS</th>
					<th class="text-center">Dikerjakan</th>
					<th class="text-center">Lulus (>65%)</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if (isset($all_lks))
					{
						$count = 1;
				//var_dump($subject_category);
				foreach ($all_lks as $lks)
				{
			?>
				<tr>
						<td class="text-center"><?=$count;?></td>
						<td class="text-center"><?=$lks['lks_name'];?></td>
						<td class="text-center"><?=$lks['attempted'];?> kali</td>
						<td class="text-center"><?=$lks['passed'];?> kali</td>
						<td class="take_lks text-center" >
							<a href="<?=base_url();?>student/take_lks/<?=$lks['lks_id'];?>" title="Kerjakan <?=$lks['lks_name'];?>">
								<button class="tombol-kerjakan">Kerjakan</button>
							</a>
						</td>
				</tr>
				<?php
						$count ++;
						}
					}
					else echo "<tr><td colspan='5'>Tidak Ada Data</td></tr>";
				?>
			</tbody>
		</table>
	</div>
</div>

<!-- <div class="mainholder">
	<div class="usercontent ui-corner-all">
		<p><h1 style="color:#06F; float: left; vertical-align: bottom;">LKS <?=$subjectdetails->cat_name;?></h1></p>
		<p><a href="<?=base_url();?>student/subject_category" title="Kembali" style="float: right; vertical-align: middle;" class="hover11">
						<img src="<?=base_url();?>assets/images/back.png" width="60" height="40"></a></p>
		<br>

        <table cellpadding="0" cellspacing="30" class="datatable" id="">
        	<tbody>
        		<tr>
        			<th>No.</th>
        			<th style="text-align:center">Lembar Kerja Siswa</th>
        			<th>Dikerjakan</th>
        			<th>Lulus<br>(>65%)</th>
        			<th>Action</th>
        		</tr>
        			<?php
        				if (isset($all_lks))
        				{
					        $count = 1;
							//var_dump($subject_category);
							foreach ($all_lks as $lks)
							{
				    ?>
          		<tr>
	                <td><?=$count;?></td>
	                <td style="text-align:center"><?=$lks['lks_name'];?></td>
	                <td><?=$lks['attempted'];?> kali</td>
	                <td><?=$lks['passed'];?> kali</td>
	                <td class="take_lks" ><a style="padding:5px;text-decoration:none;" class="ui-corner-all ui-state-active btn"
	                	href="<?=base_url();?>student/take_lks/<?=$lks['lks_id'];?>" title="Kerjakan <?=$lks['lks_name'];?>" class="hover11">Kerjakan</a></td>
          		</tr>
			        <?php
				        	$count ++;
				        	}
			       		}
			       		else echo "<tr><td colspan='5'>Tidak Ada Data</td></tr>";
			        ?>
			</tbody>
		</table>
	</div>
</div> -->
