<?php
    include("tp2_function.php");
    getHeader("ok","Question 2");

    if (isset ($_POST['socialnetwork'])){
        $_SESSION['socialnetwork']=$_POST['socialnetwork'];
    }
?>

<div class="container">
    <form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <fieldset>
            <legend>Question 2</legend>
            <fieldset>
                <legend> Quels réseaux sociaux utilisés vous régulièrement ? </legend>
                <input name="socialnetwork[]" value="Facebook" type="checkbox"><label>Facebook</label>


                <input name="socialnetwork[]" value="Twitter" type="checkbox"><label>Twitter</label>


                <input name="socialnetwork[]" value="Badoo" type="checkbox"> <label>Badoo</label>


                <input name="socialnetwork[]" value="Google +" type="checkbox"><label>Google +</label>
            </fieldset>
            <hr/>
            <input type="submit" value="Valider">
        </fieldset>
    </form>
</div>

<?php
    foreach($_POST as $key=>$valeur){
        echo "Le ou les réseau(x) sociau(x) que vous utilisez le plus est/sont ".$valeur."<br>";
    }
    getFooter();
?>