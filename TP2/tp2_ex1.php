<?php
    include("tp2_function.php");
    getHeader("coucou","TP2");

    if(array_key_exists("nom",$_COOKIE)){
        header("location: ex2_recoAuto.php");
    }
    if(array_key_exists("nom",$_POST)) {
        $_SESSION["user"] = $_POST["nom"];
    }
    if (array_key_exists("ckRemember",$_POST)){
        setcookie("nom",$_POST["nom"],time()+5);
    }
?>
    <div class="container">

        <form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
            <fieldset>
                <legend>Connexion</legend>
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input placeholder="Nom..." class="form-control" type="text" name="nom">
                    <input class="btn btn-primary" type="submit" value="Valider">
                    <hr/>
                    <input type="checkbox" name="ckremember"> Mémoriser mes inofrmations de connexion
                </div>
            </fieldset>

        </form>
    </div>

<?php
    getFooter();
?>