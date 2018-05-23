<h3>ENTRY DATA CUSTOMER</h3>
<?php echo form_open('customer/add'); ?>

<!-- <table class="table table-bordered">
	<tr>
		<td>Nama</td>
		<td><?php echo form_input('name', '', "placeholder='Nama Lengkap' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>Kota</td>
		<td><?php echo form_input('city', '', "placeholder='Kota' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td>No Hp</td>
		<td><?php echo form_input('phone', '', "placeholder='No Hp' class='form-control'"); ?></td>
	</tr>
	<tr>
		<td colspan="2">
			<?php echo form_submit('submit', 'Simpan', "class='btn btn-dark btn-sm'"); ?>
		</td>
	</tr>
</table>
 -->
<div class="form-group">
	<label>Nama</label>
	<?php echo form_input('name', '', "placeholder='Nama Lengkap' class='form-control'"); ?>
</div>
<div class="form-group">
	<label>Kota</label>
	<?php echo form_input('city', '', "placeholder='Kota' class='form-control'"); ?>
</div>
<div class="form-group">
	<label>No Hp</label>
	<?php echo form_input('phone', '', "placeholder='No Hp' class='form-control'"); ?>
</div>
<?php echo form_submit('submit', 'Simpan', "class='btn btn-dark btn-sm'"); ?>


<?php echo form_close(); ?>