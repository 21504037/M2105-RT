<?php
    session_start();
    foreach($_SESSION as $key=>$valeur){
        echo "Coucou ".$valeur."</br>";
    }
?>
<a href="reset.php">Se déconnecter</a>
