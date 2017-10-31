<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MyLet | Login </title>
	<link href="<?=base_url();?>assets/css/style login.css" rel="stylesheet" />
</head>
<body>

<div class="A">
				<div class="deskripsi">
					<blockquote>
							<h1><strong>Manajemen Surat Informatika ITERA </strong></h1>
							<p>Selamat Datang di Manajemen Surat Informatika ITERA.</p>
							<p>Jangan memberikan akun login  anda pada siapapun. <br>Keamanan data anda terletak pada anda sendiri.</p>
						  	<footer>-Administrator-</footer>
						</blockquote>
					</div>
			</div>


			<div class="A" >
				<div class="container">
				<div class="title">Masuk</div>
					<form action="<?php echo site_url ('welcome/login') ?>" method="POST">

						<br><div id="gagallogin"><?php echo $this->session->flashdata('error') ?></div>
						<input class="input" type="text" name="user" placeholder="Username"/>
						<input class="input" type="Password" name="pass" placeholder="Password"/>

						<br><input id="button" type="submit" name="login" value="Login"/></br>
						<div id="forgotpass"><a href="<?php echo site_url('welcome/LupaPass')?>">Lupa password?</a></div>
					</form>
			</div>
			</div>
			

</body>
</html>