<?php session_start();

include('includes/connexion.php');
include('vendor/autoload.php');

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO messagerie (expediteur, messages, date_expedition, adresse_ip, user_agent) VALUES(?, ?, NOW(), ?, ?)');

$req->execute(array($_COOKIE["user"], $_POST['msg'], get_ip(), $_SERVER['HTTP_USER_AGENT']));


// Pseudo a t il déjà une couleur unique?
$pseudoQuery = query('SELECT count(*) FROM personnes WHERE pseudo_user=' . $bdd->quote($_COOKIE['user']));

// insertion de la couleur unique du pseudo
if ($pseudoQuery->fetchColumn() === '0') {
    $couleur_personelle = RandomColor::one();
        query(
            'INSERT INTO personnes (pseudo_user, couleur_personelle) VALUES(?, ?)',
array($_POST['pseudo_user'], $couleur_personelle)
        );
}

 // Récupération ip et user_agent
function get_ip() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
    $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
// Redirection du visiteur vers la page du minichat


header('Location: page/chat.php');

?>