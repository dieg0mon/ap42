<!DOCTYPE html>
<html>
<head>
    <title>AP42</title>
</head>
<body>
    <h1>1</h1>

    <?php
    
    
        $numeros = [1, 4, 2, 5, 6, 4, 9]
        

        foreach ($numeros as $numero) {
            if (in_array($numero) > 1) {
                array_count_values($numero);
            }
        }
        
    
   
    
   

    ?>
    

    

</body>
</html>