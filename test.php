<?php 
    try {

        $bdd = new PDO('mysql:host=localhost;dbname=mini_chat;charset=utf8', 'root', '');

    }catch(Exception $e){

        die('Erreur : '.$e->getMessage());

    }

    // Récupération des 10 derniers messages

$reponse = $bdd->query('SELECT pseudo FROM mini_chat ORDER BY ID');
echo $reponse;

    // Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)

/*while ($donnees = $reponse->fetch()){

echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';

}*/


//$reponse->closeCursor();


//REDIRECTION

//header('Location: index.html');
?>