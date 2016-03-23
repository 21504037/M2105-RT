<?php
/**
 * Created by PhpStorm.
 * User: xxxxxxxxxxxxx
 * Date: 23/03/2016
 * Time: 15:26
 */

    include("tp2_function.php");
    getHeader(true, "Exercice 5");
    $_SESSION = array();
    session_destroy();
    if (array_key_exists("nom",$_COOKIE)){
        $user=$_COOKIE["nom"];
    }
    if (array_key_exists("delete",$_POST)){
        setcookie("nom","",time()-3600);
        echo"<div> Le cookie de $user a été supprimé </div>";
    }
?>
<div class="container">
    <div>
        Vous avec été correctement déconnecté.<br>
        <a class="btn btn-default" href="tp2_ex1.php">Se connecter à nouveau</a>
    </div>
</div>
    <form method="post" action="<?php  echo $_SERVER['PHP_SELF']?>">
        <input type="submit" name="delete" id="delete" value="supprimer le cookie">
    </form>

<?php
    getFooter();
?>