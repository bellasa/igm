<div class="container">

	<div class="row text-center">
		<div class="col-12 pt-5">
		  <h1 class="card-title"><i class="fa fa-instagram"></i><br>Instagram Content Management</h1>
		</div>   
	</div>
	<div class="row  justify-content-center" >
		
		<div class="col-md-6 col-sm-12 bg-dark m-5 p-5 rounded text-center">
			<h1 class="text-light">Login</h1>
			<?= $this->session->flashdata('gagal');?>
			<?= form_open('auth');?>

				<input type="text" name="username" class="form-control m-3 <?php if(form_error('username')){ echo 'is-invalid';} ?>" placeholder="Username">
				<div class="invalid-feedback ">
			         <?= form_error('username'); ?>
				</div>
	
				<input type="password" name="password"  class="form-control m-3 <?php if(form_error('password')){ echo 'is-invalid';} ?>" placeholder="Password" >
				<div class="invalid-feedback ">
			         <?= form_error('password');?>
				</div>
				<input type="submit" value="Login" class="btn btn-info mt-5 ">
		</div>
	</div>
</div>
