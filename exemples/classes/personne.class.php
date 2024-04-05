<?php
class personne{
    private $nom;
    private $img;
    private $age;
    private $sexe;
    private $exp;

    const HOMME = true;
    const FEMME = false; 

    public function __construct($nom,$img,$age,$sexe,$exp){
        $this->nom=$nom;
        $this->img=$img;
        $this->age=$age;
        $this->sexe=$sexe;
        $this->exp=$exp; 
    }
    function getNom(){return $this->nom;}
    function getImg(){return $this->img;}
    function getAge(){return $this->age;}
    function getSexe(){return $this->sexe;}
    function getExp(){return $this->exp;}

    function setNom(){$this->nom=$nom;}
    function setImg(){$this->img=$img;}
    function setAge(){$this->age=$age;}
    //function setSexe(){$this->sexe=$sexe;}
    function setExp(){$this->exp=$exp;}

    public function afficher_info_template(){
        echo "<table><tr><td>";
        echo "<img src='images/$this->img'";
        echo "</td><td>";
        $this->afficher_info();
        echo "</td></tr></table>";

    }
    public function afficher_info(){
        echo "Nom : ".$this->nom."<br>";
        echo "Age : ".$this->age."<br>";
        echo "Sexe : ";//pas de br car il va afficher à la suite
         if($this->sexe){
                echo "Homme <br>";
        }else{
                echo "Femme <br>"; 
        };
        echo "Expérience : ".$this->exp."<br>";

    }

}
?>