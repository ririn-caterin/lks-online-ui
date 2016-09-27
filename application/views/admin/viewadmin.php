<div class="mainholder">
	<div class="content ui-corner-all">
		<div class="createnewdiv">
			<p class="pagetittle">Data Administrator</p>
		</div>
		<table width="670px" border='1' class="contenttable" id="contenttable">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Email</th>
					<th>Phone</th>
					<!--<th>Username</th>-->
				</tr>
			</thead>
			<?php
				if (isset($all_admin))
				{
					foreach ($all_admin as $row)
					{
			?>
					<tr>
						<td><?=$row['name'];?></td>
						<td><?=$row['email'];?></td>
						<td><?=$row['phone'];?></td>
						<!--<td><?=$row['username'];?></td>-->
					</tr>
			<?php
					}
				}
				else echo "<tr><td colspan='3'>Tidak Ada Data</td></tr>";
			?>
		</table>
	</div>
	<div class="sidebarmenu">
		<?php $this->load->view('admin/sidebarmenu'); ?>
	</div>
</div>
