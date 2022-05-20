<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Le Tour de Saint-Barthélemy</title>
</head>
<body>

    <p><h5>Pour toute demande, Veuillez remplir le formulaire ci-dessous.</h5></p>
    <form method="post">
        <input type="text" name="nom" placeholder="Nom et Prénom" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="sujet" placeholder="Sujet" required>
        <textarea name="message" placeholder="Message" required></textarea>
        <input type="submit" value="Envoyer">
    </form>

    <?php
    //Si le formulaire a été soumis:
    if (isset($_POST["message"])){
        $message="Ce message vous a été envoyé via la page contact du site 
        exemplesite.fr
        Nom : " . $_POST["nom"]."
        Email : " . $_POST["email"]."
        Message : " . $_POST["message"];

        $retour = mail("php.contact.saint.barthelemy@gmail.com", $_POST["sujet"],
        $message , "From:contact@exemplesite.fr" . "\r\n" ."Reply-to:" . $_POST
        ["email"]);
        if($retour){
            echo "<p>L'email a bien été envoyé.</p>";
        }
    }
    ?>
</body>
</html>




