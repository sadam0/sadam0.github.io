<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | General Form Elements</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body>

     <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"> <i class="fa fa-user"></i> &nbsp;Entry Pegawai</h3>
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
                <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Tanggal Lahir</span>
                <input type="date" name="tgllhir" value="" class="form-control">
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Agama</span>
                <select class="form-control" style="width:2 0vh" name="">
                  <option value="islam">Islam</option>
                </select>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Status</span>
                <select class="form-control" style="width:2 0vh" name="">
                  <option value="Menikah">Menikah</option>
                  <option value="BelumMenikah">Belum Menikah</option>
                </select>
              </div>
             <br>
              <!-- <div class="input-group">
                <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Golongan</span>
                <select class="form-control" style="width:2 0vh" name="">
                  <option value="">test</option>
                </select>
             </div> -->
             <!-- <br> -->
             <div class="input-group">
               <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white">Pend Terakhir</span>
               <input type="text" class="form-control" name="" value="" style="width:50vh" placeholder="Tempat Pendidikan Terakhir">
             </div>

             <br>
             <div class="input-group">
               <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white">Gelar</span>
               <input type="text" class="form-control" name="" value="" style="width:20vh" placeholder="S.pd , Amd.Kom">
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
            <!-- <div class="input-group">
              <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Mulai Bekerja</span>
              <input type="date" class="form-control" style="width:50vh" placeholder="Masukan Tempat Kerja">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon" style="width:20vh; background-color:#3c8dbc; color:white;">Tanggal Kenaikan Gaji</span>
              <input type="date" class="form-control" style="width:50vh" placeholder="Masukan Tempat Kerja">
            </div>
            <br> -->
            <div class="input-group">
              <textarea name="" rows="8" cols="80" class="form-control" placeholder="Tuliskan Alamat Lengkap"></textarea>
            </div>

            <br>
            <br>
            <div class="input-group">
              <button class="btn btn-success" type="submit"><i class="fa fa-save"></i> &nbsp;Simpan</button>&nbsp;
              <button type="reset" class="btn btn-danger" name="button"><i class="fa fa-refresh"></i>&nbsp;Reset </button>
            </div>

            </div>
</body>
