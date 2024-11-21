<!DOCTYPE html>
<html>
<head>
    <title>AP42</title>
</head>
<body>
    <h1>1</h1>

    <?php
    
    
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $par = [];
    $impar = [];


    for ($i=0; $i < count($numeros); $i++) { 
        if ($numeros[$i] %2 == 0){
        $par[] = $numeros[$i];
        } else{
        $impar[] = $numeros[$i] ;
        }
    }
        
    echo "Numeros pares: " . implode(", ", $par) . "<br>";
    echo "Numeros impares: " . implode(", ", $impar) . "<br>";
    
   

    ?>
    

    

</body>
</html>