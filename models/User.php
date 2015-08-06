<?php




class User{
    
    private $name, $last_name, $email, $password, $role, $created_at, $updated_at;
    
    function getName() {
        return $this->name;
    }

    function getLast_name() {
        return $this->last_name;
    }

    function getEmail() {
        return $this->email;
    }

    function getPassword() {
        return $this->password;
    }

    function getRole() {
        return $this->role;
    }

    function getCreated_at() {
        return $this->created_at;
    }

    function getUpdated_at() {
        return $this->updated_at;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setRole($role) {
        $this->role = $role;
    }

    function setCreated_at($created_at) {
        $this->created_at = $created_at;
    }

    function setUpdated_at($updated_at) {
        $this->updated_at = $updated_at;
    }

        
    public function all(){
        database::conectar();
        $stmt = database::$db->prepare("Select users.id,users.first_name,users.last_name,users.email,users.role from users");
        return database::leerTabla($stmt);
    }
    
    public function store(){
        database::conectar();
//        $stmt = database::$db->prepare("insert into users values (:name,:last_name,:email,:password,:role,:created_at,:updated_at)");
        
        $stmt = database::$db->prepare("INSERT INTO reporte_mv.users (name,last_name,email,role,remember_token,created_at,updated_at)VALUES('name','last_name','test@morzan.com', '123456', 'company', '2015-07-07 17:53:42', '2015-07-07 17:53:42');");
        
        $name = 'name';
        $last_name = 'last_name';
        $email = 'test@morzan.com';
        $password = '123456';
        $role = 'company';
        $created_at = '2015-07-07 17:53:42';
        $updated_at = '2015-07-07 17:53:42';
        
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':last_name', $last_name);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':role', $role);
        $stmt->bindValue(':created_at', $created_at);
        $stmt->bindValue(':updated_at', $updated_at);        
        
        
//        $stmt->bindParam(':id', Null);
//        $stmt->bindParam(':name', $this->name);
//        $stmt->bindParam(':last_name', $this->last_name);
//        $stmt->bindParam(':email', $this->email);
//        $stmt->bindParam(':password', $this->password);
//        $stmt->bindParam(':role', $this->role);
//        $stmt->bindParam(':created_at', date('Y-m-d H:i:s'));
//        $stmt->bindParam(':updated_at', date('Y-m-d H:i:s'));
        database::ejecutar($stmt);        
    }
    
    
    
}
