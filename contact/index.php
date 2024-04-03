<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>CONTACT FORM</h1>
    <form action="" method="post">
        <p>
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="" placeholder="Votre nom ..." required>
        </p>
        <p>
            <label for="email">Email :</label>
            <input type="email" name="email" id="" placeholder="Votre email ..." required>
        </p>
        <p>
            <label for="sujet">Sujet :</label>
            <input type="text" name="sujet" id="" placeholder="Sujet ..." >
        </p>
        <p>
            <label for="message">Message :</label>
        </p>
            <textarea name="message" id="" cols="30" rows="10"></textarea>
        
        <p>
             <input type="submit" name="sub" value="ENVOYER">
        </p>
    </form>
    <?php
    include "process.php";
    $db = new db();
    if(isset($_POST["sub"])){
       // var_dump($_POST);
       $nom = $_POST['nom'];
       $email = $_POST['email'];
       $sujet = $_POST['sujet'];
       $message = $_POST['message'];
       $query = "INSERT INTO contact (nom, email, sujet,message) VALUES ('$nom','$email','$sujet','$message')";
       $db->insert($query);
    }
    ?>
</body>
</html>