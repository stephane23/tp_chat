<?php 
    echo "hello je suis un include";
    // Afficher l'adresse IP
    echo 'Adresse IP du visiteur : '.get_ip() . "</br>"; 
    // Affiche le User Agent
    echo $_SERVER['HTTP_USER_AGENT'] . "</br>";
    // Affiche le nom du serveur
    echo $_SERVER["SERVER_NAME"];