<?php
      include("inc/header.php");//récupéré depuis index.php
      include("inc/menu.php");
      require("classes/personnage1.class.php");//pour faire apparaitre une fatal erreur
 ?>
    
    
    <h1>POO 3</h1>

<?php
echo "<table><tr><td>";
 $pr1 = new personnage1("John","a.PNG",25,true,2);
 $pr1->nom="BAZZA";
 $pr1 -> afficher_info_template();
 echo "</td><td>";
 $pr2 = new personnage1("Sarah","b.PNG",28,false,6);
 $pr2 -> afficher_info_template();
 echo "</td><td>";
 $pr3 = new personnage1("Gildas","c.PNG",38,true,9);
 $pr3 -> afficher_info_template();
 echo "</td><td>";
 $pr4 = new personnage1("Lili","b.PNG",18,false,1);
 $pr4 -> afficher_info_template();
 echo "</td></tr></table>";

 ?>


<?php
      include("inc/footer.php");
?>