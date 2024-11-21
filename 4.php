<!DOCTYPE html>
<html>
<head>
    <title>AP42</title>
</head>
<body>
    <h1>1</h1>

    <?php
    
    
        $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $paroimpar = [
            [],      
            [],      
        ];

        foreach ($numeros as $numero) {
            if ($numero%2 == 0){
                $paroimpar[0][] = $numero;
            } else {
                $paroimpar[1][] = $numero;
            }
        }
        
    
        echo "Numeros pares: " . implode(", ", $paroimpar[0]) . "<br>";
        echo "Numeros impares: " . implode(", ", $paroimpar[1]) . "<br>";
        
    
   
    
   

    ?>
    

    

</body>
</html>