<?php
if(!empty($_POST)){
  if(isset($_POST["username"]) && isset($_POST["password"])){
    if($_POST["username"]!="" && $_POST["password"]!=""){

      include "conexion.php";
      $user_id=null;
      $sql1="select * from user where (username=\"$_POST[username]\" or email=\"$_POST[email]\") and password=\"$_POST[password]\"";
      $query=$con->query($sql1);
      while($r=$query->fetch_array()){
        $user_id=$r["id"];
        $user_fullname=$r["fullname"];
        $user_username=$r["username"];
        $user_email=$r["email"];
        break;
      }
      if($user_id==null){
        print "<script>alert(\"Acceso denegado.\");window.location='../login.php';</script>";
      }else{
        session_start();
        $_SESSION["user_id"]=$user_id;
        $_SESSION["user_fullname"]=$user_fullname;
        $_SESSION["user_username"]=$user_username;
        $_SESSION["user_email"]=$user_email;
        print "<script>window.location='../home.php';</script>";
      }
    }
  }
}
?>
