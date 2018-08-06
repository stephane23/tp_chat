<?php
include('includes/connexion.php');

$ps = $_POST['pseudo'];
$mdp = $_POST['pass'];
echo $mdp;
echo "<br><br>";
echo $ps;
echo "<br><br>";
$sth = $bdd->query("SELECT COUNT(*)
                    FROM personnes 
                    WHERE pseudo_user = '$ps' 
                    AND mot_de_passe = '$mdp';");

                    
$result = $sth->fetch(PDO::FETCH_BOTH);
if($result[0] == "0"){    
    echo "ça ne marche pas";
 } else {
    echo "ça marche";
    header("Location: php/cookie.php?pseudo='".$ps."'");
    }
