<?php 
class formateur{
    // public  $nom = 'Ganesh'; //les propriétés, accèsible 
    // private $nom = 'Ganesh'; //c'est plus sécurisé car on ne peut pas accèder librement
     protected $nom = 'Ganesh'; // dispo à l'interieur et class extends exemple : formateurg2r
     public  $age = 52;      
     function hello(){        //les mèthodes c'est public par défaut
        echo "<h1>Bonjour</h1>"; 
     }
    }
    class formateurg2r extends formateur{
         public function nomformateur(){
            return $this -> nom; //$this va stocker provisoirement avant de retourner la valeur
         }
    }
    $f = new formateur;                         //pour y accèder il faut créer une instance de classe
    echo $f-> hello();
   // echo $f->nom; //pas de dollar

   $a = new formateurg2r;
   echo $a -> nomformateur();
?>