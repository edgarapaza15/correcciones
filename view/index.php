<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revision</title>
    <link rel="stylesheet" type="text/css" href="./css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./css/corecciones.css">

    <title>Correccion de Escrituras</title>
</head>

<body class="fondo">
    <div class="container-fluid imagen">
        <div class="row">
            <nav class="navbar navbar-default">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Sistema de Correccion de Escrituras</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu <span class="glyphicon glyphicon-th-list"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="../controller/sesionClose.php">Salir</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->

            </nav>
        </div>

        <div class="container bg-success">
            <div class="row">
                <div class="col-md-8">
                    <h2>Revision de protocolos</h2>

                    <h3>Ingrese el Numero de Protocolo a Revisar</h3>

                    <form action="../controller/protocolos.php" method="post">
                        <div class="formulario">

                            <input type="text" name="txtprotocolo" id="txtprotocolo" class="form-control" placeholder="Numero de Protocolo">
                            <br>
                            <button class="btn btn-success" type="submit" name="revisar">Comenzar Revision</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <p>Mas botones</p>
                    <a href="corregirNombrexCodigo.php" class="btn btn-primary"> Corregir Nombre por nombre</a>
                </div>
            </div>
        </div>


        <script src="./js/jquery.js"></script>
        <script src="./js/bootstrap.js"></script>
</body>

</html>