<?php

class View {
    
    private $user_id, $description, $service_id;
    
    public function getUser_id() {
        return $this->user_id;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getService_id() {
        return $this->service_id;
    }

    public function setUser_id($user_id) {
        $this->user_id = $user_id;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function setService_id($service_id) {
        $this->service_id = $service_id;
    }
    
    public function store(){
        database::conectar();
        $stmt = database::$db->prepare("INSERT INTO views"
                . "(id,user_id,description,service_id,created_at,updated_at)VALUES"
                . "(null,:user_id,:description,:service_id,:created_at,:updated_at);");        
        
        $stmt->bindValue(':user_id', $this->user_id);
        $stmt->bindValue(':description', $this->description);
        $stmt->bindValue(':service_id', $this->service_id);
        $stmt->bindValue(':created_at', date('Y-m-d H:i:s'));
        $stmt->bindValue(':updated_at', date('Y-m-d H:i:s'));
        database::ejecutar($stmt);        
    }
    /**
     *  Regresa los meses en los cuales hubo mas trabajo. 
     */
    public function getMonths(){
        database::conectar();
        $stmt = database::$db->prepare("SELECT DATE_FORMAT(views.created_at,'%d %b %y') as date, count(services.id) as total FROM views inner join services on services.id = views.service_id group by date order by total DESC;");
        return database::leerTabla($stmt);        
    }
    
}