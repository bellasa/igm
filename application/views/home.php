<div class="container">
	<div class="row">
		<div class="card col-12 pb-5">
		  <div class="card-body  text-center">
		  	
		    <h1 class="card-title"><i class="fa fa-instagram"></i><br>Instagram Content Management</h1>
		    <h6 class="card-subtitle mb-2 text-muted  pb-5">Manajemen konten postingan instagram</h6>

		   <div class="row  justify-content-center">

		   	<div class="col-12 mb-3">
		   		<?= form_open('search');?>
			    <div class="row justify-content-center">
			    	<input class="form-control col-6 rounded-0" type="text" placeholder="Cari postingan..." style="border-radius: 30px 0px 0px 30px !important;" autocomplete="off" name="keyword">

			    	
				  	<button class="btn btn-info rounded-0 " type="submit" style="border-radius: 0px 30px 30px 0px !important;"><i class="fa fa-search pr-1"></i></button>
			    </div>
			    <div class="row justify-content-left pt-1 " style="padding-left: 25%;">
			    	<div class="text-danger small">
				     <?= form_error('keyword'); ?>
				    </div>
			    </div>
			    </form>
		    </div>

		   	<div class="dropdown p-2">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Bisnis
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="<?= base_url(); ?>bisnis">Belum Remake</a>
			    <a class="dropdown-item" href="<?= base_url(); ?>bisnis/remake">Remake</a>
			  </div>
			</div>

			<div class="dropdown p-2">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Humor
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="<?= base_url(); ?>humor">Belum Remake</a>
			    <a class="dropdown-item" href="<?= base_url(); ?>humor/remake">Remake</a>
			  </div>
			</div>

			<div class="dropdown p-2">
			  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			    Islami
			  </button>
			  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
			    <a class="dropdown-item" href="<?= base_url(); ?>islami">Belum Remake</a>
			    <a class="dropdown-item" href="<?= base_url(); ?>islami/remake">Remake</a>
			  </div>
			</div>

		   </div>	
		  </div>
		</div>

	</div>

</div>