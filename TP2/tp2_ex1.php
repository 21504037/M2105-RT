<?php
    include("tp2_function.php");
    getHeader("coucou","TP2");
?>
    <div class="container">
            <form class="form-inline" method="post" action="ex1Validation.php">
                    <fieldset>
                            <legend>Connexion</legend>
                            <div class="alert alert-info">Saisir votre nom et valider.</div>
                            <div class="form-group">
                                   <input placeholder="Nom..." class="form-control" type="text" name="nom">
                                    <input class="btn btn-primary" type="submit" value="Valider">
                            </div>
                        </fieldset>

            </form>
    </div>

<?php

    if(array_key_exists("nom",$_POST)) {
        $_SESSION["user"]=$_POST["nom"];
        if (array_key_exists("ckRemember",$_POST)){
          setcookie("nom",$_POST["nom"],time()+5*60);
        }
    }

    getFooter();
?>