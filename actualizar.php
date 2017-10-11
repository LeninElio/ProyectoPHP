<?php
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
	print "<script>alert(\"Acceso invalido!\");window.location='login.php';</script>";
}

?>
    <html>

    <head>
        <title>.: HOME :.</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    </head>

    <body>
        <?php include "php/navbar.php"; ?>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>ACTUALIZACION DE DATOS</h2>
                    <form role="form" name="actualizar" action="php/actualizar.php" method="post">
                        <div class="form-group">
                            <label for="id">id de usuario</label>
                            <input type="text" class="form-control" id="id" name="id" placeholder="Id de usuario" readonly value=<?=$_SESSION[ 'user_id']?> >
                        </div>
                        <div class="form-group">
                            <label for="username">Nombre de usuario</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario" value=<?=$_SESSION[ 'user_username']?>>
                        </div>
                        <div class="form-group">
                            <label for="fullname">Nombre Completo</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nombre Completo" value=<?=$_SESSION[ 'user_fullname']?>>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo Electronico</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electronico" value=<?=$_SESSION[ 'user_email']?>>
                        </div>


                        <button type="submit" class="btn btn-default">GUARDAR</button>
                    </form>

                </div>
            </div>
        </div>
        <script src="js/valida_actualizar.js"></script>
    </body>

    </html>
