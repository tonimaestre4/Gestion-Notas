<?php

include '../model/adminDao.php';
$id=$_POST['id'];
$mates=$_POST['mates'];
$fisica=$_POST['fisica'];
$programacion=$_POST['programacion'];
$myadmindao=new AdminDao();
$myadmindao->modificarNota($id,$mates,$fisica,$programacion);
header ('Location:../tabla.php');

?>