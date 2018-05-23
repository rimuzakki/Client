<h3>EDIT DATA CUSTOMER</h3>
<?php 
echo form_open('customer/edit');
echo form_hidden('id', $customer[0]->customerID);
?>

<table class="table table-bordered">
	<tr>
		<td>Nama</td>
		<td>
			<?php echo form_input('name', $customer[0]->customerName, "placeholder='Nama Lengkap' class='form-control'"); ?>
		</td>
	</tr>
	<tr>
		<td>Kota</td>
		<td>
			<?php echo form_input('city', $customer[0]->customerCity, "placeholder='Kota' class='form-control'"); ?>
		</td>
	</tr>
	<tr>
		<td>No Hp</td>
		<td>
			<?php echo form_input('phone', $customer[0]->customerPhone, "placeholder='No Hp' class='form-control'"); ?>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<?php echo form_submit('submit', 'simpan', "class='btn btn-dark btn-sm'"); ?>
			<?php echo anchor('customer', 'Kembali' array('class'=>'btn btn-dark btn-sm')); ?>
		</td>
	</tr>
</table>
<?php echo form_close(); ?>