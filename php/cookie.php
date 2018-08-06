<?php 
setcookie('user', $_GET["pseudo"], time() + 365 * 24 * 3600, '/', null, false, true);








header("Location: session.php");