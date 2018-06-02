<h4 class="center-align">DATA PRODUK</h4>
<div class="row">
	<div class="col s12">
		<div class="card">
		    <div class="card-content">
				<?php
					echo anchor('produk/add', '<i class="material-icons right">add</i> Tambah Data', array('class'=>'btn waves-effect waves-light btn-small btn-tambah'));
				?>
				<table class="striped">
					<thead>
					<tr>
						<th>NO</th>
						<th>NAMA</th>
						<th>Deskripsi</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th colspan="2">ACTION</th>
					</tr>
					</thead>
					<tbody>
					<?php
					$no=1;
					foreach ($produks as $produk) {
					?>
					<tr>
						<td width="10"><?php echo $no; ?></td>
						<td><?php echo $produk->nama; ?></td>
						<td><?php echo $produk->deskripsi; ?></td>
						<td><?php echo $produk->kategori; ?></td>
						<td><?php echo $produk->harga; ?></td>
						<td width="20">
							<?php 
								echo anchor('produk/edit/'.$produk->id_produk,'<i class="material-icons">edit</i>', array('class'=>'btn waves-effect waves-light btn-small tooltipped', 'data-position'=>'top', 'data-tooltip'=>'Edit'));
							?>
						</td>
						<td width="20">
							<?php 
								echo anchor('produk/delete/'.$produk->id_produk,'<i class="material-icons">delete</i>', array('class'=>'btn waves-effect waves-light btn-small tooltipped', 'data-position'=>'top', 'data-tooltip'=>'Delete'));
							?>
						</td>
					</tr>
					<?php	
					$no++;
					}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>