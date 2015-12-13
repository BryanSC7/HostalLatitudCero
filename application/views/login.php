<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS
        ================================================== -->
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic%7CMontserrat:400,700" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/flexslider.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/weather-icons.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/bootstrap.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/prettyPhoto.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/mmenu.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/jquery-ui-1.10.4.datepicker.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/css/mediaqueries.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plantilla/colors/default.css">

        <!-- Favicons
            ================================================== -->
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/plantilla/images/6185logoHotel.ico">
        <link rel="apple-touch-icon" href="#">
        <link rel="apple-touch-icon" sizes="72x72" href="#">
        <link rel="apple-touch-icon" sizes="114x114" href="#">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login</title><!--Cambiar titulo??-->
    <center><h1 id="titulos">Bienvenido al Sistema</h1></center>

    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body background="<?php echo base_url(); ?>assets/images/hotel2.jpg" >
    <div class="container">
        <div class="row">
            <!-- <div class="panel panel-primary" >-->
            <span class="glyphicon glyphicon-user"></span>
            <div class="panel-body">
                <div class="col-md-4 col-md-offset-4">
                    <h3 id="credenciales">Ingresar Credenciales</h3>
                    <form action=" " method="POST">
                        <div class="form-group">
                            <label for="username"></label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Nombre de Usuario">
                        </div>
                        <div class="form-group">
                            <label for="password"></label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                        </div>
                        <input  type="submit" value="Ingresar" class="btn btn-success">
                        <a href="<?php echo base_url('login/logout'); ?>"type="submit" class="btn btn-danger"> Cancelar </a>
                    </form>
                </div>
            </div>
            <!--</div>-->
        </div>
    </div>
</body>
</html>

<div class="panel-body">


</div>
