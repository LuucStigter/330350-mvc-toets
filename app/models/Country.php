<?php


Class Country {

    public $db;

    public function __construct(){
        $this->db = new Database();
    }


    public function getCountries(){
        $this->db->query('SELECT * FROM country ORDER BY `name` ASC');
        return $this->db->resultSet();
    }
}


?>