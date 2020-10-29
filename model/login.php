<?php
include '../clases/admin.php';
include 'adminDAO.php';
if (isset($_POST['email'])) {
    $admin = new Admin($_POST['email'], md5($_POST['psswd']));
    $adminDAO = new AdminDAO();
    if($adminDAO->login($admin)){
        header('Location: ../tabla.php');
    }else {
       header('Location: ../index.php');
    }
}else {
    header('Location: ../index.php');
}