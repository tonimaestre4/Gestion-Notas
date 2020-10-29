<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="../css/estilos.css">
  <title>Proyecto Toni Maestre  |  Actualizar</title>
</head>
<body>
  <section class="form-register">
  <form action="modificarnota.php" method="POST">
    <h4>NOTAS</h4>
    <input class="controls" type="hidden" name="id" placeholder="Mates" value="<?php echo $_GET['id']?>">
    <input class="controls" type="text" name="mates" placeholder="Mates">
    <input class="controls" type="text" name="fisica" placeholder="Física">
    <input class="controls" type="text" name="programacion" placeholder="Programación">
    <input type="submit" name="submit" value="Acceder"><a href="#"></a>
  </section>

</body>
</html>