<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>MyLet | Login </title>
	<link href="<?=base_url();?>assets/css/stylelamanadmin.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
</head>
<body>

	<div>
    <div class="col-md-2"></div>
    <div class="col-md-8">

<div class="A">
		 
				<div class="deskripsi">

					<form action="<?php echo site_url ('welcome/emailcek') ?>" method="POST">

						<br>
						<br><h1><strong>Lupa Password ?</strong></h1>
							<p>Silakan masukkan email anda!</p>
							<div class="form-group">
				                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				                    <div class="col-sm-10">
				                    <input type="text" name="email" class="form-control"/><br>
				                    </div>
				            </div>
				            <ul class="nav nav-pills">
				            	<li role="presentation" class="active">
				            		<div class="col-sm-offset-2 col-sm-10">
				                      <button type="submit" class="btn btn-default">Submit</button>
				                    </div>
				                </li>
							</ul>
					</form>
							
					</div>
			</div>

	<div class="col-md-2"></div>
</div>
	
</div>
			

</body>
</html>