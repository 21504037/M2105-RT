<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Variables</title>
    </head>
    <body>
        <?php 
        function addi($a,$b){
            echo "a+b=",$a+$b,"<br><br>";
        }
        function soustr($a,$b){
            echo "a-b=",$a-$b,"<br><br>";
        }
        function multi($a,$b){
            echo "a*b=",$a*$b,"<br><br>";
        }
        
        function divi($a,$b){
            echo "a/b=",$a/$b,"<br>";
        }

        function operation($a,$b,$op){
            echo "a=",$a,"<br>";
            echo "b=",$b,"<br>";
            
            if ($op=="add"){
                echo addi($a,$b);
            }
            
            elseif ($op=="sou"){
                echo soustr($a,$b);
            }
            
            elseif ($op=="mul"){
                echo multi($a,$b);
            }
            
            elseif ($op=="div"){
             echo divi($a,$b);
            }
            
            else {
                echo "Error system";
            }
        }
            
        echo operation(5,3,"div");

       
        ?>
    </body>
</html>