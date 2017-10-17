<nav class="navbar navbar-default" role="navigation">
<div class="container">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="./"><b>Proyecto PHP</b></a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <?php 
      if(!isset($_SESSION["user_id"])): 
      ?>
      <li><a href="./registro.php"> REGISTRO</a> </li>
      <li><a href="./login.php">LOGIN</a> </li>
      <?php 
      else: 
      ?>
      <li><a href="home.php">HOME</a> </li>
      <li><a href="actualizar.php">ACTUALIZAR DATOS</a></li>
      <li><a href="invitados.php">LISTA DE INVITADOS</a></li>
      <li><a href="php/logout.php">SALIR</a> </li>
      <?php 
      endif; 
      ?>
    </ul>  
  </div><!-- /.navbar-collapse -->
</div>
</nav>