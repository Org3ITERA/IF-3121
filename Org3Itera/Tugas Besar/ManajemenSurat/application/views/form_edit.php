<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>CRUD Form Input </title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Form Edit</h1>

	<div id="body">
		<a href="<?php echo site_url('welcome/index') ?>">Kembali</a>
			<?php if( $dataEdit ) {
				  $id 			= $dataEdit->id;
			      $username     = $dataEdit->username;
			      $password 	= $dataEdit->password;
			      $nama_lengkap = $dataEdit->nama_lengkap;
			      $jabatan      = $dataEdit->jabatan;
			      $status_user  = $dataEdit->status_user;
			      $email        = $dataEdit->email;
			    } else {
			      $username     = "";
			      $password 	= "";
			      $nama_lengkap = "";
			      $jabatan      = "";
			      $status_user  = "";
			      $email        = "";
			    }
			?>
		<form action="<?php echo site_url('welcome/update/'.$id) ?>" method="POST">
			Username <br>
			<input type="text" name="username" value="<?php echo $username ?> " /><br>
			Password <br>
			<input type="text" name="password" value="<?php echo $password ?> "/><br>
			Nama Lengkap<br>
			<input type="text" name="namalengkap" value="<?php echo $nama_lengkap ?> " /><br>
			Jabatan<br>
			<input type="text" name="jabatan" value="<?php echo $jabatan ?> " /><br>
			Status User<br>
			<input type="text" name="statususer" value="<?php echo $status_user ?> " /><br>
			Email<br>
			<input type="text" name="email" value="<?php echo $email ?> " /><br>
			<input type="submit" name="simpan" value="Simpan"/>
		</form>
	</div>

	
</div>

</body>
</html>