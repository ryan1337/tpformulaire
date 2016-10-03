<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width" />
        <title>Formulaire post</title>
    </head>
    <body>
        
        <?php 
        if (!ctype_alpha($_POST['prenom'])) {
            echo ' Veuillez entrer un prenom correct';   
        }
        elseif (isset($_POST['prenom']) && $_POST['prenom'] == true) {
            echo 'Bonjour ' . htmlspecialchars($_POST['prenom']) ;
        
        }else {
            echo ' veuillez entrer votre prenom';
        }
        if (!ctype_alpha($_POST['nom'])) {
            echo ' veuillez entrer un nom correct';
        }
        elseif (isset($_POST['nom']) && $_POST['nom'] == true ) {
            echo ' ' . htmlspecialchars($_POST['nom']);
        }else {
            echo  ' veuillez entrer votre nom';
        }
        if (isset($_POST['age']) && $_POST['age'] > 0) {
            $_POST['age'] = (int) $_POST['age'];
            echo ' vous avez ' . htmlspecialchars($_POST['age'] . ' ans');
        }else {
            echo ' veuillez entrer votre age';
        }
        if ($_POST['sexe'] == 'homme') {
            echo ' vous etes un homme';  
        }
        elseif ($_POST['sexe'] == 'femme'){
            echo ' vous etes une femme';
        }
        else {
            echo ' veuillez cocher une case';
        }
         if (isset($_POST['ville']) && $_POST['ville'] == true) {
             echo ' vous habitez ' .htmlspecialchars($_POST['ville']);
         }
         else {
             echo ' veuillez remplire la case';
         }
        if ($_POST['loisirs'] == 'boxe') {
            echo ' vous pratiqué la boxe';
        }
        elseif ($_POST['loisirs'] == 'musculation') {
            echo ' vous pratiqué la musculation';
        }
        elseif ($_POST['loisirs'] == 'basket') {
             echo ' vous pratiqué le basket-ball';
         }
        elseif ($_POST['loisirs'] == 'cinema') {
            echo ' vous etes fan de cinema';
        }
       
        else  {
            echo ' veuillez cocher une case';
        }

        if (isset($_FILES['fichier']) && $_FILES['fichier']['error'] == 0) {
         if ($_FILES['fichier']['size'] <= 100000) {
             $infosfichier = pathinfo($_FILES['fichier']['name']);
             $extension_upload = $infosfichier['extension'];
             $extension_autorisees = array('jpg', 'jpeg', 'gif', 'png');
             if (in_array($extension_upload, $extension_autorisees)) {
                 move_uploaded_file($_FILES['fichier']['tmp_name'], 'uploads/' . basename($_FILES['fichier']['name']));
              echo ' L\' envoi a bien été effectué !';  
             }
         }   
        }else {
            echo ' L\' envoi n\' a pas été effectué';
        }

        ?>
    </body>
</html>
