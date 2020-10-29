<?php

include '../model/adminDao.php';
$myadmindao=new AdminDao();
$myadmindao->eliminarUsuario($_GET['id']);
header ('Location:../tabla.php');

?>