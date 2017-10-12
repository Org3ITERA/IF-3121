<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Form Regristrasi User </title>

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
	<h1>Form Regristrasi User</h1>

	<div id="body">
		<form action="<?php echo site_url('welcome/insert')?>" method="POST" >

			 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" name="username" class="form-control"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                    <input type="text" name="password" class="form-control"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                    <input type="text" name="namalengkap" class="form-control"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Jabatan</label>
                    <div class="col-sm-10">
                    <input type="text" name="jabatan" class="form-control"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Status User</label>
                    <div class="col-sm-10">
                    <input type="text" name="statususer" class="form-control"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                    <div class="col-sm-10">
                    <input type="text" name="email" class="form-control"/><br>
                    </div>
            </div>

            <ul class="nav nav-pills">
			  <li role="presentation" class="active"><div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default"> <a href="<?php echo site_url('welcome/index')?>">Kembali</a> </button>
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