<h4 class="center-align">ENTRY DATA CUSTOMER</h4>
<?php echo form_open('customer/add'); ?>

<div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Entry Data Customer</span>
          	<div class="row">
	          	<div class="input-field col s12">
	          		<?php echo form_input('name', '', 'id="nama_lengkap" class="validate"'); ?>
					<label for="nama_lengkap">Nama Lengkap</label>
	          	</div>

	          	<div class="input-field col s12">
	          		<?php echo form_input('city', '', 'id="city" class="validate"'); ?>
					<label for="city">Kota</label>
	          	</div>

	          	<div class="input-field col s12">
	          		<?php echo form_input('phone', '', 'id="phone" class="validate"'); ?>
					<label for="phone">No Hp</label>
	          	</div>
          	</div>
			<?php //echo form_submit('submit', 'Simpan', 'class="btn waves-effect waves-light"'); ?>
			<?php
				$data = array(
				    'name'          => 'submit',
			        'id'            => 'submit',
			        'type'          => 'submit',
			        'content'       => 'Simpan <i class="material-icons right">save</i>',
			        'class'			=> 'btn waves-effect waves-light btn-small'
				);

				echo form_button($data);
			?>
        </div>
    </div><!--card--->
</div>



<?php echo form_close(); ?>