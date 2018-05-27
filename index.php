  <!DOCTYPE html>
  <html>
  <head>

    	<meta charset="utf-8">
    		<link rel="stylesheet" href="bootstrap.css">
    		<link rel="stylesheet" href="bootstrap-responsive.css">
    		<link rel="stylesheet" type="text/css" href="estilos.css">
        <link rel="stylesheet" type="text/css" href="estilo2.css">
        <link rel="stylesheet" href="estilo3.css">


    	<title>Proyecto </title>
    </head>
    <body style="background: url('https://topbackgroundwallpaper.com/wp-content/uploads/2018/03/black-and-white-retro-wallpaper-retro-black-and-white-design-vector-hd-wallpaper-2560x1600-3661.jpg'); width: 100%; height: 100vh; ">

      <!--<header id="main-header">

      <a id="logo-header" href="#">
        <span class="site-name">Alexis</span>
        <span class="site-desc">Diseño web</span>
      </a>
    </header>--><!-- / #main-header -->

      <div style="background: url('https://i.pinimg.com/originals/b4/ef/3c/b4ef3c06302e3539def6c270869606e8.jpg'); width:48%; height: 50%; ">
      <legend  style="font-size: 18pt;color:white"><b><center>Iniciar Secion</center></b></legend>


    	<table border="0" align="center" valign="middle">
    		<tr>
    		<td rowspan=2>
    		<form action="validar.php" method="post">

  		<table border="0">
  		<tr>
        <td><label style="font-size: 14pt; color:white"><b>Correo: </b></label></td>
  			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td>
      </tr><br>

      <br>

      <tr>
        <td><label style="font-size: 14pt; color:white"><b>Contraseña: </b></label></td>
  			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td>
      </tr>
      <br>
  		<tr>
        <td></td>
  			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
  			</tr></tr>

      </table>
  		</form>
  <br>
  		</td>
  		</tr>

  		</table>
    </center>
</center>
</div>
<div style="background: url('https://i.pinimg.com/originals/b4/ef/3c/b4ef3c06302e3539def6c270869606e8.jpg'); width:48%; height: 50%; ">
  <form action="registro.php" method="POST">
    <fieldset>
      <legend  style="font-size: 18pt;color:white"><b><center>Registro</center></b></legend>

        <label style="font-size: 14pt;color:white"><b>Ingresa tu nombre</b></label>
        <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />

        <label style="font-size: 14pt; color:white;"><b>Ingresa tu email</b></label>
        <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>

        <label style="font-size: 14pt; color:white;"><b>Ingresa tu Password</b></label>
        <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />

        <label style="font-size: 14pt; color:white;"><b>Repite tu contraseña</b></label>
        <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />

        <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>
    </fieldset>
  </form>
  </div>
  <?php
  		if(isset($_POST['submit'])){
  			require("registro.php");
  		}
  	?>
  <!--Fin formulario registro -->

</div>
  </body>
  </html>
