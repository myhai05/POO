<?php
      include("inc/header.php");//récupéré depuis index.php
      include("inc/menu.php");
 ?>
    
    
    <h1>POO 1</h1>

    <?php
       class personnage{
            public $nom = "Ganesh";
            public $img = "a.PNG";
            public $age = 52;
            public $sexe = true; //true homme false femme
            public $exp = 23;

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
       $p = new personnage();
       $p->afficher_info_template();
       echo "<hr>";
       $p1 = new personnage;
       $p1->nom = "Alice";
       $p1->img = "b.PNG";
       $p1->age = "40";
       $p1->sexe = false;
       $p1->exp = 16;
       $p1->afficher_info_template();
    ?>
<?php
      include("inc/footer.php");
?>