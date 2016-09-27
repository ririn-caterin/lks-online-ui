<script type="text/javascript">
	$("a.deletebttn").live('click', function(e){
		e.preventDefault();
		var q_id = $(this).attr("id");

		if (confirm('Seluruh hasil pengerjaan LKS pada soal ini akan ikut terhapus! Anda yakin akan menghapus pertanyaan ini?'))
		{
			$.ajax({
				type: "POST",
				url: "<?=base_url();?>administrator/deletequestion",
				data: {"q_id": q_id },
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
			<p class="pagetittle" style="float:right;">LKS: <?=($lksdetails->lks_name) ? $lksdetails->lks_name : '';?> [<?=$totalrecords;?> pertanyaan]</p>
			<a href="<?=base_url();?>administrator/createquestion/<?=$lksdetails->lks_id;?>" style="float:left;" class="hover11" title="Tambah Soal">
				<img src="<?=base_url();?>assets/admin/images/add.png">
				<br>Tambah Soal</a>
			<br>
		</div>
		<table width="670px" border='1' class="contenttable" id="contenttable">
			<thead>
				<tr>
					<th>No.</th>
					<th>Soal</th>
					<th colspan="2" class="center">Action</th>
				</tr>
			</thead>

			<?php
				$count = 1;
				if (isset($question))
				{
					foreach ($question->result_array() as $row)
					{
			?>
					<tr>
						<td><?=$count;?>.</td>
						<td><?=preg_replace("/<img[^>]+\>/i", "(gambar)", $row['question']);?></td>
						<td  style="line-height: 5px; text-align: center">
							<a href='<?=base_url();?>administrator/editquestion/<?=$row['q_id'];?>' title="Ubah">
							<img src='<?=base_url();?>assets/admin/images/edit.png' height="16" width="16"></a>
						</td>
						<td style="line-height: 5px; text-align: center">
							<a class="deletebttn" href="#" id='<?=$row['q_id'];?>' title="Hapus">
							<img src='<?=base_url();?>assets/admin/images/delete.png' height="16" width="16"></a>
						</td>
					</tr>
			<?php
					$count ++;
					}
				}
				else
				{
					echo "<tr><td colspan='4'>Tidak Ada Data</td></tr>";
				}
			?>
		</table>
		<div class="">
			<br><br><br>
			<div class="hintsidebar ui-corner-all" style="font-size:14px;margin:10px 30px 5px 0;width:90%">
				<span class="icon-left ui-icon ui-icon-info"></span>
				Batas maksimal soal yang ditampilkan pada setiap LKS siswa adalah <strong>40 nomor</strong>.<br>
				Jika Admin memasukkan lebih dari 40, maka soal akan ditampilkan <strong>secara acak</strong> sebanyak 40 nomor.
			</div>
		</div>
	</div>

	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>
