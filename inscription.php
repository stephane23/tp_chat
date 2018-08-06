<?php
session_start();

use \Colors\RandomColor;
include('includes/connexion.php');
include('vendor/autoload.php');

$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// vérification si le champ pseudo a bien été rempli
if (isset($_POST['pseudo'])) {
 
    // Alors dans ce cas on met saisie du $_POST['pseudo'] dans la variable $pseudo
    $pseudo =  htmlspecialchars($_POST['pseudo']);
        
    // On insère la variable pseudo qui correspond à la saisie de l'utilisateur dans la requête SQL
    $sql = $bdd->prepare('SELECT pseudo_user FROM personnes WHERE pseudo_user = \''.$pseudo.'\';');
    $sql->execute(array('.$pseudo.' => $_POST['pseudo']));

    $sql->closeCursor();

    // recherche de résultat
    $res = $sql->fetch();

    if ($res){
    // S'il y a un résultat, c'est à dire qu'il existe déjà un pseudo, alors "Ce pseudo est déjà utilisé"
    echo "Ce pseudo est déjà utilisé ! Veuillez changer de pseudo";
    header("Location: page/error.php?error=Pseudo déja utilisé");
}// Sinon le résultat est nul ce qui veut donc dire qu'il ne contient aucun pseudo, donc on insère
else {
    echo "Ce pseudo est valide";

    if ($_POST['pass2'] != $_POST['pass1']){
        echo "Les 2 mots de passe sont différents";    
    } else {
        echo "Vos mots de passe sont identiques " . $_POST['pseudo'] . " " . $_POST['pass1'];
        $req2 = $bdd->prepare('INSERT INTO mini_chat.personnes (pseudo_user, mot_de_passe, couleur_personelle) VALUES(?, ?, ?)');
        $req2->execute(array($_POST['pseudo'], $_POST['pass1'], RandomColor::one()));
        header("Location: page/chat.php");
        $req2 -> closeCursor();
    }
}
};