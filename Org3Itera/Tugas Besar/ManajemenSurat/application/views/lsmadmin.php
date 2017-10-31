<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin</title>

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
  <script type="text/javascript">$(document).ready(function(){
    $('#myTable').DataTable();
  });
  </script>
</head>
<body>

<div>
      <div class="col-md-1"></div>
      <div class="col-md-10">
		 <?php $this->load->view('navbaradmin')?>
		  <h1>Tabel Surat Masuk</h1>
		 <table id="myTable" class="table table-striped table-bordered table-hover">
		 <thead>
			<tr>
				<th>#</th>
				<th>Pengirim</th>
				<th>Perihal</th>
				<th>Nomor Surat</th>
				<th>File S. Masuk</th>
				<th>Tgl S. Masuk</th>
				<th>Tgl Masuk Surat</th>
				<th>Status S. Masuk</th>
				<th><a href="<?php echo site_url('welcome/form_inputsm') ?>">Tambah</a></th>
			</tr>
			</thead>
            <tbody>
			<?php 
			$no = 1;
			foreach ($hasilsm as $rm) {?>
			<tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $rm['pengirim_surat_masuk']?></td>
				<td><?php echo $rm['perihal_surat_masuk']?></td>
				<td><?php echo $rm['no_surat_masuk']?></td>
				<td><?php echo $rm['file_surat_masuk']?></td>
				<td><?php echo $rm['tanggal_surat_masuk']?></td>
				<td><?php echo $rm['tanggal_masuk_surat']?></td>
				<td><?php echo $rm['status_surat_masuk']?></td>	
				<td>
					<a href="<?php echo site_url('welcome/form_editsm/'.$rm['id_surat_masuk']) ?>">Edit</a> ||
					<a href="<?php echo site_url('welcome/deletesm/'.$rm['id_surat_masuk']) ?>" onclick="return confirm ('Apakah anda yakin?')">Hapus</a>
				</td>
			</tr>
			<?php }?>
			</tbody>
		</table>
	</div>
	</div>
      <div class="col-md-1"></div>
    </div>

	
</div>

</body>
</html>