<div class="mainholder">
	<div class="content ui-corner-all">
		<table>
			<tr>
				<td>
					<p ><a href="<?=base_url();?>administrator/resultlks/<?=$lksrecorddetails->student_id;?>" title="Kembali" class="hover11">
					<img src="<?=base_url();?>assets/admin/images/back.png" width="50" height="40"></a></p>
				</td>
				<td><div class="createnewdiv">
					<p class="pagetittle">Hasil LKS : <?=$lksrecorddetails->lks_name;?> / <?=date("j F Y",strtotime($lksrecorddetails->end_time));?></p>
				</div></td>
			</tr>
		</table>

		<table width="670px" border='1' class="contenttable" id="contenttable">
			<thead>
				<tr>
					<th>Soal</th>
					<th>Jawaban Siswa</th>
					<th>Jawaban Benar</th>
					<th>Status</th>
				</tr>
			</thead>

			<?php
				if (isset($questionresult))
				{
					foreach ($questionresult as $row)
					{
						$status='';
						if ($row['student_answer'] == $row['correct_answer']) $status ='Benar';
						else $status = 'Salah';
			?>
				<tr>
					<td><?=$row['question'];?> . . . .</td>
					<td><?=$row['student_answer'];?></td>
					<td><?=$row['correct_answer'];?></td>
					<td><?=$status;?></td>
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