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
             <button type="submit" >ENVOYER</button>
             <button type="reset" >RESET</button>
        </p>
    </form>
</body>
</html>