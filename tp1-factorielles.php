<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fact</title>
    </head>
    <body>
        <?php 
            function fact($nombre){
               $resultat=$nombre;
               while ($nombre>1){
                   $nombre--;
                   $resultat*=$nombre;
               }
               return $resultat;
            }
        echo fact(7);
        ?>
    </body>
</html>