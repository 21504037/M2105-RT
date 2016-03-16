<?php
    include("tp2_function.php");
    getHeader(False,"TP2");
?>
        <form methode="post" action="">
            <label for="nom">Saisissez votre prénom :</label>
            <input type="text" name="nom" id="nom">
        </form>
<?php
    $nom="";
    if(array_key_exists("nom",$_POST)) {
        $nom= $_POST["nom"];
    }

    getFooter();
?>