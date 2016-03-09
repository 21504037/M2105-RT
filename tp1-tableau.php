<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variables</title>
    </head>
    <body>
        <div>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
                <fieldset style="vertical-align: middle;">
                    <legend>Création de tableau :</legend>
                    <label for="colonne">Colonne : </label>
                    <input type="text" name="colonne" id="colonne">
                    <label for="ligne">Ligne : </label>
                    <input type="text" name="ligne" id="ligne">
                    <input type="submit" value="Valider">
                </fieldset>
            </form>
        </div>
        <br>
        <?php 
            function CreateHTMLTable($colonne,$ligne){
                echo "<table style='border-style:outset' border='3px'>";
                for ($i=0 ; $i<$colonne ; $i++){
                    echo "<tr>";
                    $gras="normal";
                    if ($i%2==0){
                        $gras="bold";
                    }
                    
                    for ($j=0; $j<$ligne ; $j++){
                        $rouge="";
                        if ($j%2==0){
                            $rouge="color:red;";
                        }
                    echo "<td style='{$rouge} font-weight:{$gras}'>{$i}-{$j}</td>";                        
                    }
                    echo "<tr>";
                }
                echo "<table>";
            }

            echo CreateHTMLTable(7,11);
                
                
        ?>
    </body>
</html>