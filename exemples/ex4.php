<?php
      include("inc/header.php");//récupéré depuis index.php
      include("inc/menu.php");
      require("classes/personne.class.php");//pour faire apparaitre une fatal erreur... stopper l'exécution du code
 ?>
   <h1>POO 4</h1>
    <?php
       // $per1 = new personne("John","a.PNG",30, true,7);
        $per1 = new personne("BAZZA","c.PNG",50, personne::HOMME,27);//avec static method - accèder à une constante        
        $per1->afficher_info_template();
        $per2= new personne("Lili","b.PNG",20,personne::FEMME,20);
        $per2->afficher_info_template();


?>




<?php
      include("inc/footer.php");
?>