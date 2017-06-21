<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Admin - Haivl.com</title>
        <link href="/admin_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="/admin_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
        <link href="/admin_asset/dist/css/sb-admin-2.css" rel="stylesheet">
        <link href="/admin_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="/admin_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
        <link href="/admin_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                @include('admin.layout.navbar_header')
                @include('admin.layout.navbar_top_links')
                @include('admin.layout.navbar_sidebar')
            </nav>
            <div id="page-wrapper">
                <div class="container-fluid">
                <div class="col-lg-12">
                    @if (Session::has('flash_message'))
                        <div class="alert alert-{{ Session::get('flash_level') }}">
                            {{ Session::get('flash_message') }}
                        </div>
                    @endif
                </div>

                    @yield('content')
                    
                </div>
            </div>
        </div>

        <script src="http://code.jquery.com/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="/admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="/admin_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="/admin_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>
        <script src="/admin_asset/dist/js/sb-admin-2.js"></script>
        <script src="/admin_asset/js/myscript.js"></script>
        
    </body>
</html>
