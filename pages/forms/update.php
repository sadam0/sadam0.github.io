<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>

     <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title"> <i class="fa fa-spinner"></i> &nbsp;Usulan Kenaikan Gaji</h3>
            </div>
            <div class="box-body">
                  <div class="input-group">
                   <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">NIP</span>
                   <input type="text" class="form-control" style="width:50vh" placeholder="Nomor Induk Pegawai">
                 </div>
                 <br>
                  <div class="input-group">
                    <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Nama Lengkap</span>
                    <input type="text" class="form-control" style="width:50vh" placeholder="Nama Lengkap">
                  </div>

                  <br>
                  <div class="input-group">
                    <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Golongan</span>
                    <select class="form-control" style="width:2 0vh" name="">
                      <option value="">test</option>
                    </select>
                 </div>
                 <br>
                 <div class="input-group">
                  <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Jabatan</span>
                  <input type="text" class="form-control" style="width:50vh" placeholder="Masukan Jabatan">
                </div>
                 <br>
                  <div class="input-group">
                   <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Tempat Bekerja</span>
                   <input type="text" class="form-control" style="width:50vh" placeholder="Masukan Tempat Kerja">
                 </div>
                 <br>
                 <hr>
                 <div class="input-group">
                   <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Pejabat Berwenang</span>
                   <input type="text" class="form-control" style="width:50vh" placeholder="Masukan Tempat Kerja" value="KADISDIKPORA" disabled>
                 </div>
                 <br>
                 <div class="input-group">
                   <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Nomor Surat</span>
                   <input type="text" class="form-control" style="width:50vh" placeholder="Auto Fill">
                 </div>
                 <br>
                <div class="input-group">
                  <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Tanggal Pengajuan</span>
                  <input type="date" class="form-control" style="width:50vh" placeholder="Masukan Tempat Kerja">
                </div>
                <br>
                <div class="input-group">
                  <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;"> Kenaikan Gaji</span>
                  <input type="date" class="form-control" style="width:50vh" placeholder="Masukan Tempat Kerja">
                </div>
                <br>

                <br>
                <div class="input-group">
                  <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Masa Kerja Golongan</span>
                  <input type="text" class="form-control" style="width:10vh" placeholder="Tahun">
                  <input type="text" class="form-control" style="width:10vh" placeholder="Bulan">
                </div>

                <br>
                <div class="input-group">
                 <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">RP.</span>
                 <input type="" class="form-control" style="width:50vh" placeholder="Masukan Usulan Gaji">
               </div>
               <br>
               <div class="input-group">
                 <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">TMT</span>
                 <input type="date" class="form-control" style="width:50vh" placeholder="Masukan Tempat Kerja">
               </div>
                <br>
                <br>
                <div class="input-group">
                  <button class="btn btn-success" type="submit"><i class="fa fa-check"></i> &nbsp;Usulkan</button>&nbsp;
                </div>

            </div>

</body>
</html>
