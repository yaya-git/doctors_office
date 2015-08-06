<?php

class Customer {
    
    private $user_id, $address, $phone, $birthdate;
    
    
    public function getUser_id() {
        return $this->user_id;
    }

    public function getAddress() {
        return $this->address;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getBirthdate() {
        return $this->birthdate;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
    }

    public function setBirthdate($birthdate) {
        $this->birthdate = $birthdate;
    }

    public function all(){
        database::conectar();
        $stmt = database::$db->prepare("SELECT id,user_id,address,phone,DATE_FORMAT(birthdate,'%d %b %Y') as birthdate,image FROM customers limit 100;");
        return database::leerTabla($stmt);
    }
    
    
}

