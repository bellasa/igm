<div class="container">
	<div class="row">
		<h3>Detail / <?= $row['link']; ?></h3>
		<div class="card col-12 pb-5">
		  <div class="card-body row">
		  	<div class="col-6">
		  		<img src="<?= base_url(); ?>asset/image/<?= $row['link']; ?>.jpg" class="img-fluid">
		  	</div>
		   	<div class="col-6">
		   		<div>
		   		<?php 
		   		$read = read_file(base_url().'asset/caption/'.$row['link'].'.txt');
		   		echo $read;
		   		?>
		   		</div>
		   		<div class="pt-5">
		   			<i class="fa fa-heart"></i> <?= $row['suka']; ?>
		   		</div>
		   		<div class="">
		   			<i class="fa fa-comment"></i> <?= $row['komen']; ?>
		   		</div>
		   	</div>
		  </div>
		</div>

	</div>

</div>