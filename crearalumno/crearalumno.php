<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/estilos.css">
  <title>Proyecto Toni Maestre  |  Crear Usuario</title>
</head>
<body>
  <section class="form-register">
  <form action="insertaralumno.php" method="POST">
    <h4>CREACIÓN DEL USUARIO</h4>
    <input class="controls" type="text" name="nombre_alumnos" placeholder="Nombre">
    <input class="controls" type="text" name="apellido1_alumnos" placeholder="Apellido paterno">
    <input class="controls" type="text" name="apellido2_alumnos" placeholder="Apellido materno">
    <input class="controls" type="text" name="grupo_alumnos" placeholder="Grupo">
    <input class="controls" type="email" name="email_alumnos" placeholder="Correo">
    <input class="controls" type="password" name="password_alumnos" placeholder="Contraseña">
    <p>Estoy de acuerdo con <a href="https://policies.google.com/terms?hl=es" target="_blank">Terminos y Condiciones</a></p>
    <input type="submit" name="submit" value="Acceder"><a href="#"></a>
  </section>

</body>
</html>