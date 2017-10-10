<!DOCTYPE html>
<html>
<head>
  <title>Admin | Regristrasi Surat</title>
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
  <!--dalam div row harus ada col yang maksimum nilainya 12-->
  <div class="row">
  <div class="col-md-1"></div>
  <div class="col-md-10">
    <h1> Regristrasi Surat Masuk Baru</h1>
          <div><?= validation_errors() ?></div>
           <?= form_open_multipart ('admin/smasuk/regristrasisurat', ['class'=>'form-horizontal ']) ?>  
               
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Pengirim</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="pengirim_surat_masuk" placeholder="" value="<?= set_value('Pengirim')?>">
                     </div>
                  </div>


                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Perihal</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="perihal_surat_masuk" placeholder="" value="<?= set_value('perihal_surat_masuk')?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">No. Surat</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="no_surat_masuk" placeholder="" value="<?= set_value('no_surat_masuk')?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tanggal Masuk Surat</label>
                    <div class="col-sm-10">
                      <input type="date" id="tgl_msurat" class="form-control" name="tanggal_masuk_surat" placeholder="" value="<?= set_value('tanggal_masuk_surat')?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3"  class="col-sm-2 control-label">Tanggal Surat</label>
                    <div class="col-sm-10">
                      <input type="date" id="tgl_smasuk" class="form-control" name="tanggal_surat_masuk" placeholder="" value="<?= set_value('tanggal_surat_masuk')?>">
                    </div>
                  </div>


                  <div class="form-group">
                    <label for="inputEmail3"  class="col-sm-2 control-label">Image</label>
                    <div class="col-sm-5">
                      <input type="file" class="form-control" name="userfile">
                    </div>
                  </div>

                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> Remember me
                        </label>
                      </div>
                    </div>
                  </div>


                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-default">Save</button>
                    </div>
                  </div>

           <?= form_close() ?>

      </div>
      <div class="col-md-1"></div>
    </div>
      

</body>
</html>