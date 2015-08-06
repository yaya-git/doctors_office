<?php 

require '../../conexion/database.php';
require '../../models/View.php';

try{

    $oView = new View();

    $oView->setUser_id($_POST['user_id']);
    
    $oView->setDescription($_POST['description']);
    
    $oView->setService_id($_POST['service_id']);
    
    $oView->store();
    
    header("Location: ../../index.php");
    
}  catch (Exception $e){
    return $e->getMessage();
}



