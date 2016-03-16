<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variables</title>
    </head>
    <body>
        <?php
            $link=array(
                ["href"=>"ex0.php" , "title"=>"Accès à l'exercice 1" , "texte"=>"Exercice 1"],
                ["href"=>"ex1.php","title"=>"Accès à l'exercice 2","texte"=>"Exercice 2"],
                ["href"=>"tp1_operation.php","title"=>"Accès à l'exercice 3","texte"=>"Exercice 3"],
                ["href"=>"tp1_tableau.php","title"=>"Accès à l'exercice 4","texte"=>"Exercice 4"]
            );
     
            $pageActive=$_SERVER["PHP_SELF"];

            foreach ($link as $lnk) {
                echo "<a href='{$lnk["href"]}' title=\"{$lnk["title"]}\"> {$lnk['texte']} </a><br>";
            }
        ?>