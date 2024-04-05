<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>ENREGISTRER FORM</h1>
    <form action="" method="post">
        <p>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" placeholder="Votre nom ..." required>
        </p>
        <p>
            <label for="email">Email :</label>
            <input type="email" name="email" id="email" placeholder="Votre email ..." required>
        </p>
        <p>
            <label for="mdp">Mot de passe :</label>
            <input type="password" name="mdp" id="mdp" placeholder="Mdp ..." >
        </p>
        <p>
             <input type="submit" name="sub" value="ENVOYER">
             <div id="display">123</div>
        </p>
    </form>
   <?php
    require "db_process.php";
    $db = new db();
    if(isset($_POST["sub"])){
       // var_dump($_POST);
       $nom = $_POST['nom'];
       $email = $_POST['email'];
       $mdp = $_POST['mdp'];
       $query = "INSERT INTO exercice (nom, email, mdp) VALUES ('$nom','$email','$mdp')";
       $db->insert($query);
    }
?>
<script>
        document.querySelector('#mdp').addEventListener('input', function() {
            // Capturer la valeur du champ de mot de passe
            

            // Afficher la valeur capturée dans la zone de texte
            document.querySelector('#display').value = password;
        });
    </script>
</body>
</html>