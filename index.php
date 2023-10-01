<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bienvenido a PickTech</title>
    <link rel="shortcut icon" href="assets/logo.png">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="css/stripe.css">
    
</head>

<body>
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <?php
    include_once "db_picktech.php";
    $con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASSWORD,$DB_NAME,$DB_PORT);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                include_once "menu.php";
                $modulo = $_REQUEST['modulo'] ?? '';
                if ($modulo == "productos2" || $modulo == "") {
                    include_once "productos2.php";
                }
                if ($modulo == "detalleproducto") {
                    include_once "detalleProducto.php";
                }
                if ($modulo == "carrito") {
                    include_once "carrito.php";
                }
                if( $modulo=="envio" ){
                    include_once "envio.php";
                }
                if( $modulo=="pasarela" ){
                    include_once "pasarela.php";
                }
                if( $modulo=="factura" ){
                    include_once "factura.php";
                }
                if( $modulo=="about" ){
                    include_once "About.php";
                }
                ?>
            </div>
        </div>
    </div>

    <!-- jQuery UI 1.11.4 -->
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- daterangepicker -->
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="js/stripe.js"></script>
    <script src="js/ecommerce.js"></script>

</body>

</html>
