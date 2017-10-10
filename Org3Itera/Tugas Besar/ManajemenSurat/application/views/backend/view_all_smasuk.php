<!DOCTYPE html>
<html>
<head>
  <title>Admin | Surat Masuk</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <link href="<?=base_url();?>assets/css/navbar.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Load JQuery -->
  <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>

  <!-- Load DataTables dan bootstrap -->
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
  <style>
  	.row div{ border: #000 0px solid }
  </style>
  <script type="text/javascript">$(document).ready(function(){
    $('#myTable').DataTable();
  });
  </script>

</head>
<body>
	<!-- dalam div row harus ada col yg maksimum nilainya 12-->
          <?php $this->load->view('navbar')?>
          <div class="row">
          	<div class="col-md-1"></div>
          	<div class="col-md-10">
          	<h1>Tabel Surat Masuk</h1>
           <table id="myTable" class="table table-striped table-bordered table-hover">
             <thead>
                <tr>
                  <th>#</th>
                  <th>Pengirim</th>
                  <th>Perihal</th>
                  <th>No. Surat</th>
                  <th>Tanggal Masuk Surat</th>
                  <th>Tanggal Surat</th>
                  <th>
                    <?=anchor('admin/smasuk/regristrasisurat','Regristrasi Surat',['class'=>'btn btn-primary btn-sm'])?>
                  </th>
                </tr>
             </thead>
             <tbody>

              <?php foreach($surat_masuk as $smasuk): ?>
                <tr>
                  <td><?=$smasuk->id_surat_masuk?></td>
                  <td><?=$smasuk->pengirim_surat_masuk?></td>
                  <td><?=$smasuk->perihal_surat_masuk?></td>
                  <td><?=$smasuk->no_surat_masuk?></td>
                  <td><?=$smasuk->tanggal_masuk_surat?></td>
                  <td><?=$smasuk->tanggal_surat_masuk?></td>
                  <td>
                    <?=anchor('admin/smasuk/suntingsurat/'.$smasuk->id_surat_masuk,'Sunting',['class'=>'btn btn-default'])?>

                    <?=anchor('admin/smasuk/hapussurat'.$smasuk->id_surat_masuk, 
                    'Hapus',
                    ['class'=>'btn btn-danger btn-sm','onclick'=>'return confirm(\'Apakah anda yakin?\')'])?>
                  </td>
                </tr>
              <?php endforeach; ?>
             </tbody>
           </table> 
          	</div>
          	<div class="col-md-1"></div>
          </div> 

            

           <script>
           	$(document).ready(function(){
           		$('#myTable').DataTable();
           	});
           </script>
      </div>
      <div class="col-md-1"></div>
    </div>
      

</body>
</html>