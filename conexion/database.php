<?php

date_default_timezone_set('America/Tijuana');

class database {
    
    public static $db;
    
    public static function conectar(){
        
        try{
            if(!isset(self::$db))
            {
                $usuario = 'root';
                $contrasenia = '';
                self::$db = new PDO('mysql:host=127.0.0.1;dbname=doctors_office', $usuario, $contrasenia);   
            }         
            
        }  catch (PDOException $e){
            die($e->getMessage());
        }
    }
    
    public static function leerTabla($stmt){
        if (!$stmt->execute()) {
            throw new Exception(implode(' : ', $stmt->errorInfo()));
        }

        return $stmt->fetchAll();
    }
    
    public static function leerRegistro($stmt){
        if (!$stmt->execute()) {
            throw new Exception(implode(' : ', $stmt->errorInfo()));
        }
        
        return $stmt->fetch();
    }
    
    public static function ejecutar($stmt){
        if (!$stmt->execute()) {
            throw new Exception(implode(' : ', $stmt->errorInfo()));
        }        
    }
    
    public static function desconectar(){
        self::$db = null;
    }
    
    
}




