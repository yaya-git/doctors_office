<?php 

require '../../conexion/database.php';
require '../../models/User.php';

try{

    $oUser = new User();

    $oUser->setName($_POST['name']);

    $oUser->setLast_name($_POST['last_name']);

    $oUser->setEmail($_POST['email']);

    $oUser->setRole($_POST['role']);
    
    $oUser->store();
    
    header("Location: ../../index.php");
    
}  catch (Exception $e){
    return $e->getMessage();
}


