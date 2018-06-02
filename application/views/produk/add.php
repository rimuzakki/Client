<h4 class="center-align">ENTRY DATA PRODUK</h4>
<?php echo form_open('produk/add'); ?>

<div class="row">
    <div class="col s12">
      <div class="card">
        <div class="card-content">
          <span class="card-title">Entry Data produk</span>
          	<div class="row">
	          	<div class="input-field col s12">
	          		<?php echo form_input('nama', '', 'id="nama_produk" class="validate"'); ?>
					<label for="nama_produk">Nama Produk</label>
	          	</div>

	          	<div class="input-field col s12">
	          		<?php echo form_input('deskripsi', '', 'id="deskripsi" class="validate"'); ?>
					<label for="deskripsi">Deskripsi</label>
	          	</div>
	          	<?php
	          		$options = array('' => '-Kategori-',
									'Gaming Headset' => 'Gaming Headset',
									'Gaming Laptop' => 'Gaming Laptop',
									'Gaming Mouse' => 'Gaming Mouse',
									'Gaming Accesories' => 'Gaming Accesories');
	          	?>
	          	<div class="input-field col s12">
	          		<?php echo form_dropdown('kategori', $options, ''); ?>
					<label>Kategori</label>
	          	</div>

	          	<div class="input-field col s12">
	          		<?php echo form_input('harga', '', 'id="harga" class="validate"'); ?>
					<label for="harga">Harga</label>
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