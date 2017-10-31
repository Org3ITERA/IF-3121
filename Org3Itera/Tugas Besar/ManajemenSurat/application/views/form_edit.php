<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Form Update User </title>

	 <!-- Load JQuery -->
  <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <!-- Load DataTables dan bootstrap -->
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
  <script type="text/javascript">$(document).ready(function(){
    $('#myTable').DataTable();
  });
  </script>

</head>
<body>

<div>
    <div class="col-md-1"></div>
    <div class="col-md-10">

<div id="container">
	<h1>Form Edit User</h1>

	<div id="body">
			<?php if( $dataEdit ) {
				  $id 			= $dataEdit->id;
			      $username     = $dataEdit->username;
			      $password 	  = $dataEdit->password;
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


			<div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" name="username" class="form-control" value="<?php echo $username ?>"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                    <input type="text" name="password" class="form-control" value="<?php echo $password ?>"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                    <input type="text" name="namalengkap" class="form-control" value="<?php echo $nama_lengkap ?> "/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                    <input type="text" name="jabatan" class="form-control" value="<?php echo $jabatan ?> "/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Status User</label>
                    <div class="col-sm-10">
                    <input type="text" name="statususer" class="form-control" value="<?php echo $status_user ?> "/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" value="<?php echo $email ?> "/><br>
                    </div>
            </div>

            <ul class="nav nav-pills">
			  <li role="presentation" class="active"><div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default"> <a href="<?php echo site_url('welcome/pageDataUser')?>">Kembali</a> </button>
                    </div> </li>
			  <li role="presentation" class="active"><div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Save</button>
                    </div></li>
			</ul>

		</form>
	</div>

	
</div>

<div class="col-md-1"></div>
</div>
	
</div>

</body>
</html>