<h3>DATA CUSTOMER</h3>
<?php
	echo anchor('customer/add', '<i class="fas fa-plus"></i> Tambah Data', array('class'=>'btn btn-dark btn-sm mb-3'));
?>
<table class="table table-bordered">
	<tr>
		<td>NO</td>
		<td>NAMA LENGKAP</td>
		<td>ALAMAT</td>
		<td>NO HP</td>
		<td colspan="2">ACTION</td>
	</tr>

	<?php
	$no=1;
	foreach ($customers as $customer) {
	?>
	<tr>
		<td width="10"><?php echo $no; ?></td>
		<td><?php echo $customer->customerName; ?></td>
		<td><?php echo $customer->customerCity; ?></td>
		<td><?php echo $customer->customerPhone; ?></td>
		<td width="20">
			<?php 
				echo anchor('customer/edit/'.$customer->customerID,'Edit', array('class'=>'btn btn-dark btn-sm'));
			?>
		</td>
		<td width="20">
			<?php 
				echo anchor('customer/delete/'.$customer->customerID,'Delete', array('class'=>'btn btn-dark btn-sm'));
			?>
		</td>
	</tr>
	<?php	
	$no++;
	}
	?>
</table>