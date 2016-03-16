<?php
    include("tp2_function.php");
    getHeader("coucou","TP2");
?>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            <label for="nom">Saisissez votre prénom :</label>
            <input type="text" name="nom" id="nom">
        </form>
<?php

    if(array_key_exists("nom",$_POST)) {
        $_SESSION["user"]=$_POST["nom"];
    }

    getFooter();
?>