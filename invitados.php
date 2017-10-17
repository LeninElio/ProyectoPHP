<?php 
session_start();
if(!isset($_SESSION["user_id"]) || $_SESSION["user_id"]==null){
print "<script>alert(\"Acceso denegado\");window.location='login.php';</script>";
}
 ?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Invitados</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <?php include "php/navbar.php"; ?>
    <div class="panel panel-primary">
        <div class="panel-heading">Lista de Invitados</div>
        <div class="panel-body">Buscar <input type="text" name="Buscar">
            <br>
            <table border="1">
                <th>
                    <td>N°</td>
                    <td>Apellido Paterno</td>
                    <td>Apellido Materno</td>
                    <td>Nombre</td>
                </th>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>    
        </div>
    </div>
</body>
</html> 