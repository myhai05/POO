<?php
    class personnage1{//la classe reste comme un model et les values seront introduites
        public $nom;
        public $img; 
        public $age;
        public $sexe;
        public $exp;

        function __construct($nom,$img,$age,$sexe,$exp){//autodéclanchateur
              $this->nom=$nom;
              $this->img=$img;
              $this->age=$age;
              $this->sexe=$sexe;
              $this->exp=$exp;               
          }
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