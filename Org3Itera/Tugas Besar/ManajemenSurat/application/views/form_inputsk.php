<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title> Form Regristrasi Surat </title>

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
	<h1>Form Regristrasi Surat</h1>

	<div id="body">
		<form action="<?php echo site_url('welcome/insertsk')?>" method="POST" >

			 <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Penerima</label>
                    <div class="col-sm-10">
                    <input type="text" name="penerima" class="form-control"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Perihal</label>
                    <div class="col-sm-10">
                    <input type="text" name="perihal" class="form-control"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor surat keluar</label>
                    <div class="col-sm-10">
                    <input type="text" name="nosurat" class="form-control"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal keluar surat</label>
                    <div class="col-sm-10">
                    <input type="date" name="tglkeluarsurat" class="form-control"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">File surat keluar</label>
                    <div class="col-sm-10">
                    <input type="text" name="filesuratkeluar" class="form-control"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Status Surat keluar</label>
                    <div class="col-sm-10">
                    <input type="text" name="statussuratkeluar" class="form-control"/><br>
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