<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin pannel</title>

  <!-- Custom fonts for this template-->
  <link href=" {{asset('admin/vendor/fontawesome-free/css/all.min.css')}}  " rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{asset('admin/vendor/datatables/dataTables.bootstrap4.css')}} " rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('admin/css/sb-admin.css')}} "  rel="stylesheet">

</head>
@include('admin/layout/header')

 @include('admin.layout.sidebar')

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{url('admin.layout')}}">Dashboard</a>
          </li>
    
        </ol>

        <!-- Page Content -->
        <h1>Welcome to Admin Pannel</h1>
        
      </div>
      <!-- /.container-fluid -->

     


@include('admin.layout.footer')

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('admin/js/sb-admin.min.js')}}"></script>

</body>

</html>
