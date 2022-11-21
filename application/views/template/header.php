<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="icon" href="<?= base_url('asset/logo/ig.png'); ?>">
    <title>IG Management</title>
  </head>
  <style type="text/css">
  	
  	.invalid-feedback {
    display: block !important;
    width: 100%;
    margin-top: .25rem;
    font-size: 80%;
    color: #dc3545;
}
  </style>
  <body style="font-family: 'Nunito', sans-serif;" >
  	<nav class="navbar navbar-expand-lg mb-3 shadow-sm navbar-dark bg-dark">
  	<div class="container">	  
  	<a class="navbar-brand" href="<?= base_url(); ?>home">IG Konten</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarNavDropdown">
	    <ul class="navbar-nav">
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url(); ?>bisnis">Bisnis</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url(); ?>humor">Humor</a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="<?= base_url(); ?>islami">Islami</a>
	      </li>
        <li class="nav-item">
          <a href="<?= base_url('auth/logout')?>" class="btn btn-secondary d-sm-block d-md-none">logout</a>
        </li>
	    </ul>
	  </div>
	 </div>
   <a href="<?= base_url('auth/logout')?>" class="btn btn-secondary d-none d-sm-none d-md-block">logout</a>
	</nav>
