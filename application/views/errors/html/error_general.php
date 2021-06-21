<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<title>Error</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Font Google -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;500;800;900&display=swap" rel="stylesheet">

  <style type="text/css">
  	body{
	    font-family: 'Montserrat', sans-serif;
	}

	.bg-flat {
		background-color: #f3f4f5;
	}

	.text-custom {
		color: #06207e;
	}

  </style>
</head>
<body class="bg-flat">
	<div class="px-4 py-5 my-5 text-center">
	    <h1 class="display-5 fw-light text-custom"><?php echo $heading; ?></h1>
	    <div class="col-lg-6 mx-auto">
	      <p class="lead mb-4"><?php echo $message; ?></p>
	</div>
</body>
</html>