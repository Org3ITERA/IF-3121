<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Form Update Surat </title>

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
  <h1>Form Edit Surat</h1>

  <div id="body">
      <?php if( $dataEdit ) {
            $id_surat_masuk         = $dataEdit->id_surat_masuk;
            $pengirim_surat_masuk   = $dataEdit->pengirim_surat_masuk;
            $perihal_surat_masuk    = $dataEdit->perihal_surat_masuk;
            $no_surat_masuk         = $dataEdit->no_surat_masuk;
            $tanggal_surat_masuk    = $dataEdit->tanggal_surat_masuk;
            $tanggal_masuk_surat    = $dataEdit->tanggal_masuk_surat;
            $status_surat_masuk     = $dataEdit->status_surat_masuk;
          } else {
            $pengirim_surat_masuk   = "";
            $perihal_surat_masuk    = "";
            $no_surat_masuk         = "";
            $tanggal_surat_masuk    = "";
            $tanggal_masuk_surat    = "";
            $status_surat_masuk     = "";
          }
      ?>
    <form action="<?php echo site_url('welcome/updateSM/'.$id_surat_masuk) ?>" method="POST">


      <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Pengirim</label>
                    <div class="col-sm-10">
                    <input type="text" name="pengirim_surat_masuk" class="form-control" value="<?php echo $pengirim_surat_masuk ?>"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Perihal</label>
                    <div class="col-sm-10">
                    <input type="text" name="perihal_surat_masuk" class="form-control" value="<?php echo $perihal_surat_masuk ?>"/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Nomor surat masuk</label>
                    <div class="col-sm-10">
                    <input type="text" name="no_surat_masuk" class="form-control" value="<?php echo $no_surat_masuk ?> "/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal surat masuk</label>
                    <div class="col-sm-10">
                    <input type="text" name="tanggal_surat_masuk" class="form-control" value="<?php echo $tanggal_surat_masuk ?> "/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal masuk surat</label>
                    <div class="col-sm-10">
                    <input type="text" name="tanggal_masuk_surat" class="form-control" value="<?php echo $tanggal_masuk_surat ?> "/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Status surat masuk</label>
                    <div class="col-sm-10">
                    <input type="text" name="status_surat_masuk" class="form-control" value="<?php echo $status_surat_masuk ?> "/><br>
                    </div>
            </div>
            <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">File surat masuk</label>
                    <div class="col-sm-10">
                    <input type="text" name="file_surat_masuk" class="form-control" value="<?php echo $status_surat_masuk ?> "/><br>
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