<?php

class User{
    
    private $name, $last_name, $email, $role;
    
    public function getName() {
        return $this->name;
    }

    public function getLast_name() {
        return $this->last_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getRole() {
        return $this->role;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setRole($role) {
        $this->role = $role;
    }

    public function all(){
        database::conectar();
        $stmt = database::$db->prepare("Select id,first_name,last_name,email,role from users order by created_at DESC");
        return database::leerTabla($stmt);
    }
    
    public function dropdown(){
        database::conectar();
        $stmt = database::$db->prepare("Select id, concat(first_name,' ',last_name) as name from users order by name ASC");
        return database::leerTabla($stmt);
    }    
    
    public function store(){
        database::conectar();
        $stmt = database::$db->prepare("INSERT INTO users(id,first_name,last_name,email,role,status,created_at,updated_at)VALUES(null,:name,:last_name,:email,:role,1,:created_at,:updated_at);");        
        $stmt->bindValue(':name', $this->name);
        $stmt->bindValue(':last_name', $this->last_name);
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':role', $this->role);
        $stmt->bindValue(':created_at', date('Y-m-d H:i:s'));
        $stmt->bindValue(':updated_at', date('Y-m-d H:i:s'));
        database::ejecutar($stmt);        
    }
    
    public static function getById($id){
        database::conectar();
        $stmt = database::$db->prepare("SELECT id,first_name,last_name,email,role,status,created_at,updated_at FROM users where id = :id;");
        $stmt->bindValue(':id', $id);
        return database::leerRegistro($stmt);        
    }
    
    
    
}
