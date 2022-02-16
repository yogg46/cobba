<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>| Big Ben Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Prakasam Mathaiyan">
    <meta name="description" content="">

    <!--[if IE]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="assets/plugins/lib/modernizr.js"></script>
    <link rel="icon" href="assets/images/favicon.png" type="image/gif">

    <link rel="stylesheet" type="text/css" href="assets/plugins/bootstrap/bootstrap.css">

    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style-default.css">
</head>

<body>

    <div class="wrapper has-footer">

        <?php include './includs/header.php';?>

        <?php include './includs/sidebar.php';?>



        <div class="main-container">    <!-- START: Main Container -->


            <div class="content-wrap">  <!--START: Content Wrap-->

                <div class="row">

                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h2 class="panel-title">Panel title</h2>
                                <div class="tools">
                                    <a class="btn-link collapses panel-collapse" href="javascript:;"></a>
                                    <a class="btn-link reload" href="javascript:;"><i class="ti-reload"></i></a>
                                    <a class="btn-link expand" href="javascript:;"><i class="ti-fullscreen"></i></a>
                                    <a class="btn-link panel-close" href="javascript:;"><i class="ti-close"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">

                                @yield('container')

                            </div>
                        </div>
                    </div>

                </div>


            </div>  <!--END: Content Wrap-->

        </div>  <!-- END: Main Container -->



    </div>  <!-- END: wrapper -->

    <script type="text/javascript" src="assets/plugins/lib/jquery-2.2.4.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/jquery-ui.min.js"></script>
    <script type="text/javascript" src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/plugins/lib/plugins.js"></script>

    <script type="text/javascript" src="assets/js/app.base.js"></script>
</body>
</html>
