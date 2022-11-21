<div class="container pb-5">
	<div class="row">
		<div class="col-md-12 ">
			<h1><?= $judul ?></h1>
			<table class="table table-striped">
			  <thead class="thead-light">
			    <tr>
			      <th scope="col">No</th>
			      <th scope="col">Gambar</th>
			      <!-- <th scope="col">Like</th>
			      <th scope="col">Komen</th> -->
			      <th scope="col">Edit</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php foreach ($bisnis as $b ) : ?>
			    <tr>
			      <th scope="row"><?= ++$start; ?></th>
			      <td><img src="<?= base_url(); ?>asset/image/<?= $b['link']; ?>.jpg" style="width: 150px ;"></td>
			      <!-- <td>
			      	<?= $b['suka']; ?>
			      </td>
			      <td>
			      	<?= $b['komen']; ?>
			      </td> -->
			      <td><a href="<?= base_url(); ?>detail/<?= $b['link']; ?>" class="btn btn-info">Detail</a></td>
			    </tr>
			  <?php endforeach; ?>
			  </tbody>
			  <?=  $this->pagination->create_links(); ?>
			</table>

		</div>
	</div>
</div>
<div class="fixed-bottom p-1 d-none d-sm-none d-md-block">
	<a href="#" class=" btn btn-info btn-lg">&uarr;</a>
</div>