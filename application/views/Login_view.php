<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pembayaran SPP</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!--===============================================================================================-->

<!-- style custome -->

<style>

	body{
		background-color: #E5E3C9;
	}


	.wadah{
		width: 350px;
		height: 500px;
		position: absolute;
		top: 10%;
		left: 40%;
		border-radius: 10%;
	}

	.judul{
		text-align: center;
		padding-top: 5%;
	}
	.gambar{
		padding: 5%;
		width: 150px;
		height: 150px;
		transform: translateX(70%);
			}

	.logo{
		width: 100%;
		height: 100%;
	}

	.login{
		padding: 10%;
	}
</style>
</head>
<body>
	
	<div class="card wadah font-monospace">
		<h1 class="judul">LOGIN</h1>
		<div class="gambar">
		<img src="<?php echo base_url('assets/img/logo.png') ?>" class="logo">
	</div>
	<form class="login" action="<?php echo site_url('login/auth'); ?>" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label" style="font-size: 20px;">Username</label>
    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label" style="font-size: 20px;">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary form-control">Submit</button>
</form>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>