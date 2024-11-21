<!DOCTYPE html>
<html>
<head>
    <title>Actividades</title>
</head>
<body>
    <h1>2</h1>

    <?php
    
   $array = ["rojo", "verde", "negro", "azul", "verde", "rojo", "gris", "morado"]; 
   $repetidos = [];


   for ($i=0; $i < count($array); $i++) { 
        for ($j=0; $j < count($array); $j++) { 
            if ($array[$i] == $array[$j]) {
                $repetidos[$i];
            }
        }
   }
   
   echo $repetidos;

   

    ?>
    

    

</body>
</html>