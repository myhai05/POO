<?php
class db{
    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db_name = "cda3";

    private $link;

    private function connect(){
        $this -> link = new mysqli($this->host,$this->user,$this->pass,$this->db_name);//on ne peut pas accèder en dehors de la classe
    }
    public function __construct(){
        $this -> connect();
    }

    public function insert($query){
        $result = $this -> link->query($query);
        if($result){
            echo "<h2>Formulaire envoyé avec succès</h2> ";
        }else{
            echo "<h2>Echec de l'envoi</h2> ";
        }
    }
}