<script type="text/javascript" src="<?=base_url();?>assets/admin/js/tinymce/plugins/placeholder/plugin.js"></script>
<script type="text/javascript">
	$(document).ready(function ()
	{
		$("#editquestionform").validationEngine();
	});
	tinymce.init({
    	selector: '#questiontextarea',
    	fontsize_formats: '8pt 10pt 12pt 14pt 18pt 24pt 36pt',
			forced_root_block : false,
    	theme: 'modern',
    	language: 'id',
    	width: '114%',
    	formats: {
		    alignleft: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'left'},
		    aligncenter: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'center'},
		    alignright: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'right'},
		    alignfull: {selector : 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img', classes : 'justify'},
		    bold: {inline : 'b'},
		    italic: {inline : 'i'},
		    underline: {inline : 'u'},
		    strikethrough: {inline : 's'}
		},
    	plugins: [
			"advlist autolink lists charmap preview searchreplace visualblocks fullscreen",
			"contextmenu paste placeholder table image responsivefilemanager"
			],
    	toolbar: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist | image",
		external_filemanager_path:"<?=base_url();?>assets/filemanager/",
		filemanager_title:"Responsive Filemanager",
		external_plugins: { "filemanager" : "<?=base_url();?>assets/filemanager/plugin.min.js"},
    	relative_urls: false,
			remove_script_host: false
  	});
</script>
<style type="text/css">
	.input-text{width: 78%}
</style>

<div class="mainholder">
	<div class="content ui-corner-all">
		<table>
			<td>
				<p ><a href="<?=base_url();?>administrator/mngquestion/<?=$question->lks_id;?>" title="Kembali" class="hover11">
				<img src="<?=base_url();?>assets/admin/images/back.png" width="50" height="40"></a></p>
			</td>
			<td>
				<div class="createnewdiv">
					<p class="pagetittle"> Memperbarui Soal</p>
				</div>
			</td>
			<td>
				<?php
					if (isset($success))
					{
						echo '<p id="success" class="msg done">'.$success.'</p>';
					}
					if (isset($error))
					{
						echo '<p id="error" class="msg error">'.$error.'</p>';
						echo "Error :".$upload_error;
					}
				?>
			</td>
		</table>

		<form action="" method="post" id="editquestionform" enctype="multipart/form-data">
			<table>
				<tbody>
					<tr>
						<td colspan="2"><div class="input">
							<input type="hidden" value="<?=(isset($question)) ? $question->q_id: '';?>" name='q_id'/>
							<textarea cols="50" rows="10" id="questiontextarea" name="question" class="ui-corner-all input-text validate[required]"
										style="resize: none;"><?=(isset($question)) ? $question->question : '' ;?></textarea>
										<?=form_error('question');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Pilihan A</div></td>
						<td><div class="input">
							<input type="text" name="optiona" value="<?=(isset($question)) ? $question->option_a : ''?>" class="ui-corner-all input-text validate[required]"><?=form_error('optiona');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Pilihan B</div></td>
						<td><div class="input">
							<input type="text" name="optionb" value="<?=(isset($question)) ? $question->option_b : ''?>" class="ui-corner-all input-text validate[required]"><?=form_error('optionb');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Pilihan C</div></td>
						<td><div class="input">
							<input type="text" name="optionc" value="<?=(isset($question)) ? $question->option_c : ''?>" class="ui-corner-all input-text validate[required]"><?=form_error('optionc');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Pilihan D</div></td>
						<td><div class="input">
							<input type="text" name="optiond" value="<?=(isset($question)) ? $question->option_d : ''?>" class="ui-corner-all input-text validate[required]"><?=form_error('optiond');?>
						</div></td>
					</tr>
					<tr>
						<td><div class="label">Jawaban Benar</div></td>
						<td><div class="input">
							<select name="correctanswer" class="input-text validate[required] ui-corner-all" style="max-width:20%;">
								<option value=""> - - Pilih - - </option>
								<option value="A" <?=(isset($question) && $question->correct_answer == 'A') ? 'selected' : '';?>>A</option>
								<option value="B" <?=(isset($question) && $question->correct_answer == 'B') ? 'selected' : '';?>>B</option>
								<option value="C" <?=(isset($question) && $question->correct_answer == 'C') ? 'selected' : '';?>>C</option>
								<option value="D" <?=(isset($question) && $question->correct_answer == 'D') ? 'selected' : '';?>>D</option>
							</select>
						</div></td>
					</tr>
					<tr><td><br></td></tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Simpan Pertanyaan" name="editquestionbttn" class="input-button ui-corner-all ui-state-default"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>
