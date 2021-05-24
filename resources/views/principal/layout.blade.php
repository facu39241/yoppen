<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('dist/css/skins/_all-skins.min.css')}}">
  <!-- Css customer styles-->
  <link rel="stylesheet" href="{{asset('css/customer.css')}}">
  

  <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic')}}">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <!-- Site wrapper -->
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="index" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>Y</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Yoppen</b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Menu de navegacion</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li class="dropdown user user-menu">
              <ul class="dropdown-menu">
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Usuario ingresante- nombre y estado -->

        <div class="user-panel">
          <div class="pull-left image">
            <img src="../../dist/img/default-user.png" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p>{{Auth::user()->name}}</p>
            <i class="fa fa-circle text-success"></i> Online
          </div>
        </div>

        <!--botones del menu principal  -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">Menu De Navegación</li>

          <li><a href="/index"><i class="fa fa-home"></i> <span>Inicio</span></a></li>

          <li class="treeview">
            <a href="/payment">
              <i class="fa fa-wrench"></i>
              <span>Mantenimiento</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: unblock;">
              <li><a href="/company"><i class="fa fa-circle-o"></i> Sucursal</a></li>
              <li><a href="/users"><i class="fa fa-circle-o"></i> Empleados </a></li>

            </ul>
          </li>

          <li class="treeview">
            <a href="/payment">
              <i class="fa fa-cubes"></i>
              <span>Almacén</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: unblock;">
              <li><a href="/articles"><i class="fa fa-circle-o"></i> Articulos</a></li>
              <li><a href="/categories"><i class="fa fa-circle-o"></i> Categorias </a></li>

            </ul>

          </li>
          <li class="treeview">
            <a href="/payment">
              <i class="fa fa-shopping-cart"></i>
              <span>Compras</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: unblock;">
              <li><a href="/orders"><i class="fa fa-circle-o"></i> Ingresos</a></li>
              <li><a href="/provisioners"><i class="fa fa-circle-o"></i> Proveedores </a></li>

            </ul>
          </li>

          <li class="treeview">
            <a href="/payment">
              <i class="fa fa-dollar"></i>
              <span>Ventas</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: unblock;">
              <li><a href="/payment"><i class="fa fa-circle-o"></i> Realizar venta</a></li>
              <li><a href="/clients"><i class="fa fa-circle-o"></i> Clientes</a></li>


            </ul>
          </li>

          <li class="treeview">
            <a href="/payment">
              <i class="fa  fa-search"></i>
              <span>Consultas Compras</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: unblock;">
              <li><a href="#"><i class="fa fa-circle-o"></i> Compras Generales </a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="/payment">
              <i class="fa  fa-search"></i>
              <span>Consultas Ventas</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: unblock;">
              <li><a href="#"><i class="fa fa-circle-o"></i> Ventas Generales </a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Ventas por Cliente</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Ventas por Empleado</a></li>
            </ul>
          </li>

          <li>
            <a class="fa fa-sign-out" href="{{ route('logout') }}" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              {{ __('Cerrrar Sesion') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
              <input type="submit">
            </form>
        </ul>
      </section>

    </aside>

    @yield('content')

    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <b>Version</b> 0.2.0
      </div>
      <strong>Copyright &copy; 2020 .</strong> All rights
      reserved.
    </footer>

    <div class="tab-content">
    </div>
    </form>
  </div>

  </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  </div>
  <!-- ./wrapper -->
  <!-- utiljs -->
  <!-- <script rel="stylesheet" href="{{asset('js/util.js')}}"></script>-->
  <!-- chartjs -->
  <script href="https://www.chartjs.org/dist/2.9.4/Chart.min.js"></script>
  <script href="https://www.chartjs.org/samples/latest/utils.js"></script>
  <!-- jQuery 3 -->
  <script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('bower_components/googleChart/js/loader.js')}}"></script>
  <script src="{{asset('bower_components/googleChart/js/grafic.js')}}"></script>
   <!-- Google charts -->
   <script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('dist/js/demo.js')}}"></script>
  <!-- js customer -->
  <script src="{{asset('js/customer.js')}}"></script>
  <!-- DataTables -->
  <script src="{{asset('bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <script>
    $(document).ready(function() {
      $('.sidebar-menu').tree();
    })
  </script>
  @yield('script')
  <script>
    $(function() {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging': true,
        'lengthChange': false,
        'searching': true,
        'ordering': true,
        'info': false,
        'autoWidth': false
      })
    });
  </script>
  
</body>


</html>