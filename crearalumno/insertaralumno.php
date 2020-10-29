<?php

require_once '../model/connection.php';
try {

    $query = "INSERT INTO tbl_alumnos (nombre_alumnos,apellido1_alumnos,apellido2_alumnos,grupo_alumnos,email_alumnos,password_alumnos) VALUES (?,?,?,?,?,?)";
    $sentencia=$pdo->prepare($query);
   
    $nombre=$_POST['nombre_alumnos']; 
    $apellido1=$_POST['apellido1_alumnos'];
    $apellido2=$_POST['apellido2_alumnos'];
    $grupo=$_POST['grupo_alumnos'];
    $email=$_POST['email_alumnos'];
    $passwd=$_POST['password_alumnos']; 
        
        $sentencia->bindParam(1,$nombre);
        $sentencia->bindParam(2,$apellido1);
        $sentencia->bindParam(3,$apellido2);
        $sentencia->bindParam(4,$grupo);
        $sentencia->bindParam(5,$email);
        $sentencia->bindParam(6,$passwd);
        $sentencia->execute();

        header ('Location:../tabla.php');

} catch (Exception $ex) {
    echo $ex->getMessage();
   
}

?>