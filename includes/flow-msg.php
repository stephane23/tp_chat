
<?php 
session_start();
include('connexion.php');

//$req = $bdd->query('SELECT * FROM  messagerie');
$req = $bdd->query('SELECT m.*, u.couleur_personelle FROM messagerie m LEFT OUTER JOIN personnes u ON m.expediteur = u.pseudo_user');


//$messagesQuery = $bdd->query(
//'SELECT m.*, u.couleur_personelle FROM messagerie m LEFT OUTER JOIN personnes u ON m.expediteur = u.pseudo_user'
//);

while($donnees = $req->fetch()){
     echo "<div style='border: 2px solid ". $donnees["couleur_personelle"]. ";padding: 5px; display: inline-block;'>" .  $donnees["expediteur"] . " ". $donnees["messages"] . "</div><br><br>";
    }

$req->closeCursor();



//$req->execute(array($_POST['msg']));
?>

