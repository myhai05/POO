<?php
/*class formateur{
    public $nom;
    function addnom(){
        return $this -> nom = "BAZZA";
    }
}
   $f = new formateur;
   echo $f -> addnom(); */

   class formateur{
    public static $nom = "Gildas";// static - appartient à la classe -  pas besoin de créer une instance pour accèder à une proriété, sans passer par la function
    public static function addnom(){
        return self::$nom = "BAZZA";
    }



   }
   echo formateur ::$nom; //accès à la propriété sans créer une instance
   echo "<br>";
   echo formateur::addnom();






?>