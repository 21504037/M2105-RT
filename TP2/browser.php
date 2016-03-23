<?php
    include("tp2_function.php");
    getHeader("ok","Question 1");

    if (isset ($_POST['browser'])){
        $_SESSION['browser']=$_POST['browser'];
    }
?>

<div class="container">
    <form class="form-inline" method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <fieldset>
            <legend>Question 1</legend>
            <fieldset>
                <legend> Quel est votre navigateur préféré ? </legend>
                <input name="browser" value="Chrome" type="radio"><label>Chrome</label>


                <input name="browser" value="Safari" type="radio"><label>Safari</label>


                <input name="browser" value="Opéra" type="radio"> <label>Opéra</label>


                <input name="browser" value="IE" type="radio"><label>IE</label>


                <input name="browser" value="Autre" type="radio"><label>Autre</label>
            </fieldset>
            <hr/>
            <input type="submit" value="Valider">
        </fieldset>
    </form>
</div>

<?php
    foreach($_POST as $key=>$valeur){
    echo "Votre navigateur préféré est ".$valeur."<br>";
}
    getFooter();
?>