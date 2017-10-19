<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MyLet </title>
	<link href="<?=base_url();?>assets/css/stylelamanadmin.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
</head>
<body>

	<div>
    <div class="col-md-1"></div>
    <div class="col-md-10">

<?php $this->load->view('navbaradmin')?>

<div class="A">
		 
				<div class="deskripsi">

					<blockquote>
							<h1><strong>Manajemen Surat Informatika ITERA </strong></h1>
							<p>Selamat Datang <?php echo $this->session->userdata('loger') ?></p>
							<p>Selamat menajalankan tugas anda dan semoga hari anda menyenangkan.</p>
						</blockquote>
					</div>
			</div>

	<div class="col-md-1"></div>
</div>
	
</div>
			

</body>
</html>