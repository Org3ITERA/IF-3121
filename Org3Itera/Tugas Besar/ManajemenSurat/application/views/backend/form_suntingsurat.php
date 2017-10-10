<?php
  $id_surat_masuk = $smasuk->id_surat_masuk;
if($this -> input -> post('is_submitted')){
  $pengirim_surat_masuk   = set_value ('pengirim_surat_masuk');
  $perihal_surat_masuk    = set_value ('perihal_surat_masuk');
  $no_surat_masuk  = set_value ('no_surat_masuk');
  $tanggal_masuk_surat = set_value ('tanggal_masuk_surat');
  $tanggal_surat_masuk = set_value ('tanggal_surat_masuk');
}else{
  $pengirim_surat_masuk   = $smasuk->pengirim_surat_masuk;
  $perihal_surat_masuk    = $smasuk->perihal_surat_masuk;
  $no_surat_masuk  = $smasuk->no_surat_masuk;
  $tanggal_masuk_surat = $smasuk->tanggal_masuk_surat;
  $tanggal_surat_masuk = $smasuk->tanggal_surat_masuk;
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin | Sunting Surat</title>
  <!-- Load JQuery -->
  <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

  <!-- Load DataTables dan bootstrap -->
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
  <script type="text/javascript">
    $(document).ready(function(){
      $('#myTable').DataTable();
    });
  </script>

</head>
<body>

  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
            
          <h1> Sunting Surat Masuk </h1>
          <div><?= validation_errors() ?></div>
           <?= form_open('admin/smasuk/suntingsurat/'. $id_surat_masuk , ['class'=>'form-horizontal']) ?>  
               
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Pengirim</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pengirim_smasuk" placeholder="" value="<?= $pengirim_surat_masuk?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">perihal</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="perihal_smasuk" placeholder="" value="<?= $perihal_surat_masuk?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">No. Surat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="no_smasuk" placeholder="" value="<?= $no_surat_masuk?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Masuk Surat</label>
                    <div class="col-sm-10">
                      <input type="date" id="tgl_msurat" class="form-control" name="tgl_masuk_surat" placeholder="" value="<?= $tanggal_masuk_surat?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3"  class="col-sm-2 control-label">Tanggal Surat</label>
                    <div class="col-sm-10">
                      <input type="date" id="tgl_smasuk" class="form-control" name="tgl_smasuk" placeholder="" value="<?= $tanggal_surat_masuk?>">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="inputEmail3"  class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-5">
                      <input type="file" class="form-control" name="userfile">
                    </div>
                  </div>

                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Remember me
                        </label>
                      </div>

                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <input type="hidden" name="is_submitted" value="1" />


                      <button type="submit" class="btn btn-default">Save</button>
                    </div>
                  </div>
           <?= form_close() ?>

      </div>
      <div class="col-md-1"></div>
    </div>
      

</body>
</html>