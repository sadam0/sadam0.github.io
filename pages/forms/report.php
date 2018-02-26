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
    <h1>Report</h1>
    <section class="content">
      <div class="box">
        <div class="box-header">
          <div class="box">
            <form class="" action="index.html" method="post">
              <div class="input-group">
                <input type="search" name="" value="" class="form-control" style="width:30vh">
                <button type="submit" name="button" class="btn btn-info">Search &nbsp;<i class="fa fa-search"></i></button>
              </div>
            </form>
            <br>
          <div class="">
              <a href="#" class="btn btn-success"><i class="fa  fa-file-excel-o"></i> &nbsp; Export</a>
              <a href="#" class="btn btn-info"><i class="fa  fa-print"></i></a>
          </div>
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>NIP</th>
                <th>Nama</th>
                <th>Golongan</th>
                <th>Detail</th>
                <th>Status Kenaikan Gaji</th>
                <th>Kenaikan Gaji</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1.</td>
                <td>11545121215</td>
                <td>Tester</td>
                <td>IV/A</td>
                <td> <a href=""><i class="fa fa-search"></i></a></td>
                <td><a class="btn btn-info">Sudah Mengusulkan</a></td>
                    <td> <a href="#">Usulkan <i class="fa fa-arrow-right"></i></a> </td>
              </tr>
              <tr>
                <td>2.</td>
                <td>11545121216</td>
                <td>Mario</td>
                <td>IV/A</td>
                <td> <a href=""><i class="fa fa-search"></i></a></td>
                <td><a class="btn btn-danger">Belum</a></td>
                <td> <a href="#">Usulkan <i class="fa fa-arrow-right"></i></a> </td>
              </tr>
            </tbody>

          </table>
        </div>

      </div>

    </section>

    <!-- Section -->
    <!-- jQuery 3 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../../bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
          'paging'      : true,
          'lengthChange': false,
          'searching'   : false,
          'ordering'    : true,
          'info'        : true,
          'autoWidth'   : false
        })
      })
    </script>
  </body>
</html>
