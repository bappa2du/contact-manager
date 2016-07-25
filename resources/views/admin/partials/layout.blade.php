<!DOCTYPE html>
<html>
<head>
    <base href="/"/>
    <meta charset="UTF-8">
    <title>Admin | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        @include('admin.partials.style')
      </head>
      <body class="skin-black">
        <!-- header logo: style can be found in header.less -->
        @include('admin.partials.header')
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    @include('admin.partials.sidebar')
                    <aside class="right-side">
                <!-- Main content -->
               @yield('content')
                
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
        @section('script')
          @include('admin.partials.script')
        @show
</body>
</html>
