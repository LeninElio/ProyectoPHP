<?php

if(!empty($_POST)){
	if(isset($_POST["id"]) && isset($_POST["username"]) &&isset($_POST["fullname"]) &&isset($_POST["email"])){
		if($_POST["id"]!="" && $_POST["username"]!="" && $_POST["fullname"]!="" && $_POST["email"]!=""){
			include "conexion.php";
			
			$found=false;
			$sql1= "select * from user where username=\"$_POST[username]\" or email=\"$_POST[email]\"";
			$query = $con->query($sql1);
			while ($r=$query->fetch_array()) {
				$found=true;
				break;
			}
			if($found){
				print "<script>alert(\"Nombre de usuario o email ya estan registrados.\");window.location='../actualizar.php';</script>";
			}
			$sql = "update user set fullname=\"$_POST[fullname]\", username=\"$_POST[username]\", email=\"$_POST[email]\" where id=\"$_POST[id]\"";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualización exitosa.\");window.location='logout.php';</script>";
			}
		}
	}
}
?>
