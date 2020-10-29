<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Proyecto Toni Maestre  |  TABLA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
  </head>
  <body>
<header class="Cabecera">
  <h3>USUARIOS</h3>
</header>
<body>
<?php 

include 'model/adminDao.php';
$myadmindao=new AdminDao();
$listausuarios=$myadmindao->getlistaUsuarios();


echo "<table>";

echo "<tr>";
echo "<th >Nombre</th>";
echo "<th >1r Apellido</th>";
echo "<th >2o Apellido</th>";
echo "<th >Grupo</th>";
echo "<th >Email</th>";
echo "<th >Actualizar</th>";
echo "<th >Eliminar</th>";
echo "</tr>";

foreach($listausuarios as $usuario){
    echo "<tr>";
    echo "<td>{$usuario['nombre_alumnos']}</td>";
    echo "<td>{$usuario['apellido1_alumnos']}</td>";
    echo "<td>{$usuario['apellido2_alumnos']}</td>";
    echo "<td>{$usuario['grupo_alumnos']}</td>";
    echo "<td>{$usuario['email_alumnos']}</td>";
    echo "<td><a href='opciones/actualizar.php?id={$usuario['id_alumnos']}'>Actualizar<a></td>";
    echo "<td><a href='opciones/eliminar.php?id={$usuario['id_alumnos']}'>Eliminar<a></td>";
    echo "</tr>";
}
    
   

?>
</table>


<form action="tabla.php" method="POST">
    <label for="nombre_alumnos">Nombre del alumno:</label>
    <input type="text" id="nombre_alumnos" name="nombre_alumnos" placeholder="Nombre..."><br><br>
    <label for="apellido1_alumnos">1r apellido del alumno:</label>
    <input type="text" id="apellido1_alumnos" name="apellido1_alumnos" placeholder="Apellido..."></br></br>
    <input type="submit" value="Filtrar" name="filtrar">
  </form>


<?php
if (empty($_POST['filtrar'])){
  $mostrar_alumnos=new AdminDAO;
  //echo $mostrar_alumnos->getlistaUsuarios();
} else if (isset($_POST['nombre_alumnos']) || isset($_POST['apellido1_alumnos'])){
      $filtro_alumnos=new AdminDAO;
      $filtro_alumnos->filtro();
 }
?>

<footer>
<div class="table-title"> <br><br>
<td><a href="crearalumno/crearalumno.php"><button class="button">Insertar usuarios<a></td>
</div>
</footer>
</tbody>
</table> 
</body>
</html>