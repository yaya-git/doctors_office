<?php

class Service {
    
    private $name;
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
    
    public function dropdown(){
        database::conectar();
        $stmt = database::$db->prepare("Select id, name from services order by name ASC");
        return database::leerTabla($stmt);
    }
    
    /**
     * obtiene los servicios que mas se realizaron por mes
     */
    public function report(){
        database::conectar();
        $stmt = database::$db->prepare("SELECT services.name, DATE_FORMAT(views.created_at,'%d %b %y') as date, count(services.id) as total FROM views inner join services on services.id = views.service_id group by services.name order by total DESC;");
        return database::leerTabla($stmt);        
    }
    
}