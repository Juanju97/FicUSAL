<?php



?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FicUSAL | Registration Page</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="index.php"><b>Fic</b>USAL</a>
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Registrar un nuevo usuario</p>

            <form action="index.php" method="post">
                <div class="form-group has-feedback">
                    <div class="row">
                        <input type="text" class="form-control col-11" placeholder="Nombre completo" name="full_name">
                        <span class="fa fa-user form-control-feedback col-1"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <div class="row">
                        <input type="text" class="form-control col-11" placeholder="Nombre de usuario" name="username">
                        <span class="fa fa-user form-control-feedback col-1"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <div class="row">
                        <input type="text" class="form-control col-11" placeholder="Dirección" name="direction">
                        <span class="fa fa-user form-control-feedback col-1"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <div class="row">
                        <input type="email" class="form-control col-11" placeholder="Email" name="email">
                        <span class="fa fa-envelope form-control-feedback col-1"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <div class="row">
                        <input type="password" class="form-control col-11" placeholder="Password">
                        <span class="fa fa-lock form-control-feedback col-1"></span>
                    </div>
                </div>
                <div class="form-group has-feedback">
                    <div class="row">
                        <input type="password" class="form-control col-11" placeholder="Retype password">
                        <span class="fa fa-lock form-control-feedback col-1"></span>
                    </div>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <br /><a href="login.php" class="text-center">Ya estoy registrado</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass   : 'iradio_square-blue',
            increaseArea : '20%' // optional
        })
    })
</script>
</body>
</html>
