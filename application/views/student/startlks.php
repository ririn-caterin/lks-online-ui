<?php
	if(isset($lksdetails))
	{
		foreach ($lksdetails as $lks)
		{
?>
			<div class="row bg-title-page">
				<div class="container">
					<div class="title-page">
						<?=$lks['lks_name'];?>
					</div>
				</div>
			</div>
			<div class="container nopadding-350 padding-bottom50">
				<div class="col-md-6 margin-top-bottom-10 kotak-petunjuk">
					<div class="font-petunjuk">
						PETUNJUK !
					</div>
					<div class="marginatasbawah5">
						<span class="glyphicon glyphicon-file font18px"></span>&nbsp;				40 soal pilihan ganda
					</div>
					<div class="marginatasbawah5">
						<span class="glyphicon glyphicon-time font18px"></span>&nbsp;				<?=$lks['duration'];?> menit pengerjaan
					</div>
					<div class="marginatasbawah5 petunjuk">
						- Tekan tombol <strong>"Simpan Jawaban"</strong> <u>setiap kali</u> menjawab soal <br>
						- Jangan menggunakan tombol "Back" pada browser <br>
						- Timer akan berhenti jika waktu habis atau LKS telah selesai dikerjakan <br>
						- <strong>Penting!</strong> Jangan lupa untuk klik tombol <strong>"Selesai"</strong> jika sudah selesai mengerjakan LKS
					</div>
					<div class="marginatasbawah5 margin-left20">
						<a class="" href="<?=base_url();?>student/lks/<?=$lks['lks_id'];?>">
							<button class="tombol-kerjakan">Mulai</button>
						</a>
					</div>
				</div>
			</div>
<?php
		}
	}
	else echo '<h1 style="color:red;">Terdapat error! Hubungi administrator.</h1>';
?>


<!-- <div class="mainholder ">
<?php
	if(isset($lksdetails))
	{
		foreach ($lksdetails as $lks)
		{
?>
			<h1 style="color:#06F;"><?=$lks['lks_name'];?></h1>
			<div class="usercontent ui-corner-all">
				<ul class="examdata">
		                <li><span class="file"></span><strong><?=$lks['totalquestion'];?></strong> soal pilihan ganda</li>
		                <li><span class="time"></span><strong><?=$lks['duration'];?></strong> menit pengerjaan</li>
		                <li style="border-bottom:none">
		                <ol class="instructions">
		 					<li>Kerjakan semua soal</li>
		 					<li>Jangan menggunakan tombol "Back" pada browser.</li>
		 					<li>Timer akan berhenti jika waktu habis atau LKS telah selesai dikerjakan.</li>
		 					<li><strong>Penting!</strong> Jangan lupa untuk klik tombol <strong>Selesai</strong> jika sudah selesai mengerjakan LKS.</li>
		                </ol>
		                </li>
		                <li style="border-bottom:none"><a class="ui-corner-all ui-state-active bttn-takeexam"
		                	href="<?=base_url();?>student/lks/<?=$lks['lks_id'];?>"> Mulai </a></li>
		        </ul>

			</div>
<?php
		}
	}
	else echo '<h1 style="color:red;">Terdapat error! Hubungi administrator.</h1>';
?>
</div> -->
