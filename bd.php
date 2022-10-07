<?php

class Database{

    private $host;
    private $db;
    private $user;
    private $contraseña;
    private $charset;

    public function _construct(){
        $this->host = 'localhost';
        $this->db = 'myvalred';
        $this->user = 'root';
        $this->password = '';
        $this->charset = 'utf8mb4';
    }
}

?>