<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <link href="bootstrap.css" rel="stylesheet">
  <link href="estilo2.css" rel="stylesheet">
</head>
<body>
  <div style="background-color:skyblue">
    <legend><b><center>Iniciar Secion</center></b></legend>


    <table>
      <tr>
        <td rowspan=2>
          <form action="validar.php" method="post">

            <table border="0">
              <tr>
                <td><label><b>Correo: </b></label></td>
                <td> <input class="form-group has-success" type="text" name="mail"></td>
              </tr>

              <tr>
                <td><label><b>Contraseña: </b></label></td>
                <td><input  type="password" name="pass"></td>
              </tr>

              <tr>
                <td><input class="btn btn-primary" type="submit" value="Aceptar"></td>
              </tr>
            </tr>

          </table>
        </form>
        <br>
      </td>
    </table>
  </div>
  <div style="background-color:skyblue">
    <form action="registro.php" method="POST" enctype="multipart/form-data">
      <fieldset>
        <legend><b><center>Registro</center></b></legend>

        <label><b>Ingresa tu nombre</b></label>
        <input type="text" name="realname" class="form-control" placeholder="Ingresa tu nombre" />

        <label><b>Ingresa tu email</b></label>
        <input type="text" name="nick" class="form-control"  required placeholder="Ingresa mail"/>

        <label><b>Ingresa tu Password</b></label>
        <input type="password" name="pass" class="form-control"  placeholder="Ingresa contraseña" />

        <label><b>Repite tu contraseña</b></label>
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
