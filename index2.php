<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
header("Location:index.php");
}
?>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <title>prueba</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link href="bootstrap.min.css" rel="stylesheet"/>

    <!--<script language="javascript" type="text/javascript">
      var nombre = prompt("WELCOME INSERT NAME: ");
      alert("HELLO " + nombre + ", THANK YOU FOR ENTERING THE PAGE" );
  </script>-->
  </head>

  <body style="background:url('https://www.hdwallpapers.org/download/nashville-usa-1920x1200.jpg')">
    <div class="container">
      <header class="header">
        <div class="row">
          <?php
          include("cabecera.php");
          ?>
        </div>
      </header>
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container">
            <div class="nav-collapse">
              <ul class="nav">
                <li class=""><a href="admin.php">USER</a></li>
              </ul>
              <form action="#" class="navbar-search form-inline" style="margin-top:6px">
              </form>
              <ul class="nav pull-right">
                <li><a href="">WELCOME (a) <strong><?php echo $_SESSION['user'];?></strong> </a></li>
                <li><a href="desconectar.php"> Close Sessión </a></li>
              </ul>
            </div>
          </div>
        </body>
        </html>
