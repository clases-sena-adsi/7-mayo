<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Buttons</title>
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <?php
    require_once('components/navbar.php');
    require_once('components/sidebar.php');
    ?>
    <div class="content-wrapper">
     <?php require_once 'components/breadcrumbs.php'?>

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary card-outline">
                            <div class="card-header">
                                <h3 class="card-title">
                                    <i class="fas fa-edit"></i>
                                    Descripcion Inicio
                                </h3>
                            </div>
                            <div class="card-body pad table-responsive">
                                <h1>Home Amigo</h1>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos in inventore
                                    non sunt. Ad at, consectetur corporis ex, facere ipsam, magnam molestiae nisi
                                    obcaecati optio quidem repudiandae soluta tempore veritatis?
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php require_once 'components/footer.php'?>
    <aside class="control-sidebar control-sidebar-dark"></aside>
</div>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/adminlte.min.js"></script>
<script src="assets/js/demo.js"></script>
</body>
</html>
