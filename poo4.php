<?php
class hello{
    public function formateur(){
        echo "Hello Ganesh";
    }
    public function __construct(){ //construct n'a pas besoin d'etre appelé (exemple pour une connexion), lorsqu'une instance est crée il s'exécute toute de suite
        echo "Construct is working";
    }
}
$h = new hello;
echo "<br>";
echo $h->formateur();
?>