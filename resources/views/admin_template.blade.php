<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
      <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

   

    @if($menu_nav[0] == "profile_setting")
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css") }}">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/iCheck/all.css") }}">
    

    <!-- dfkdas;fj -->

    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/select2/select2.min.css") }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css") }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css") }}">
    @endif

  

    @if($menu_nav[0] == "dashboard")
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css") }}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css") }}">

    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/iCheck/flat/blue.css") }}">
    <!-- Morris chart -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/morris/morris.css") }}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css") }}">
      <!-- Date Picker -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/datepicker/datepicker3.css") }}">
      <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker-bs3.css") }}">
      <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset("/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}">
    @endif

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <!-- Header -->
    @include('include/header')

    <!-- Sidebar -->
    @include('include/sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $header_title['title']; ?>
        <small><?php echo $header_title['desc']; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo $header_title['url'][0]; ?>"><i class="<?php echo $header_title['icon']; ?>"></i> <?php echo $header_title['navigator'][0]; ?></a></li>
        <!--<li><a href="#">UI</a></li>
        <li class="active">Icons</li>-->
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      
        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
    <!-- Footer -->
    @include('include/footer')

    <!-- Control Sidebar -->
    @include('include/control_sidebar')

</div>
<!-- ./wrapper -->







@if($menu_nav[0] == "profile_setting")
<!-- jQuery 2.1.4 -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>
<!-- Select2 -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/select2/select2.full.min.js") }}"></script>


<!-- dfkldjasflk  -->

<!-- Slimscroll -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
<!-- FastClick -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/fastclick/fastclick.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("/bower_components/AdminLTE/dist/js/app.min.js") }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset("/bower_components/AdminLTE/dist/js/demo.js") }}"></script>

<script>
    $(function () {
        //Initialize Select2 Elements
        $(".select2").select2();
    });
</script>
@endif

@if($menu_nav[0] == "dashboard")
<!-- jQuery 2.1.4 -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/jQuery/jQuery-2.1.4.min.js") }}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.5 -->
<script src="{{ asset("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="{{ asset("/bower_components/AdminLTE/plugins/morris/morris.min.js") }}"></script>
<!-- Sparkline -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/sparkline/jquery.sparkline.min.js") }}"></script>
<!-- jvectormap -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
<script src="{{ asset("/bower_components/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js") }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/knob/jquery.knob.js") }}"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="{{ asset("/bower_components/AdminLTE/plugins/daterangepicker/daterangepicker.js") }}"></script>
<!-- datepicker -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}"></script>
<!-- Slimscroll -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
<!-- FastClick -->
<script src="{{ asset("/bower_components/AdminLTE/plugins/fastclick/fastclick.js") }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset("/bower_components/AdminLTE/dist/js/app.min.js") }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset("/bower_components/AdminLTE/dist/js/pages/dashboard.js") }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset("/bower_components/AdminLTE/dist/js/demo.js") }}"></script>

@endif


</body>
</html>
