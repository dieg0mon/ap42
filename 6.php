<!DOCTYPE html>
<html>
<head>
    <title>AP42</title>
</head>
<body>
    <h1>1</h1>

    <?php
    
    
        $notas = [3, 4, 7, 2, 8, 7, 9, 6, 5, 10];
        $notabaja = [];
        $notalta = [];
        
        
        foreach ($notas as $nota) {
            if ($nota < $notabaja) {
                $notabaja = $nota;
            }
            if ($nota > $notalta) {
                $notalta = $nota;
            }
        }
            
        
        
        var_dump($notabaja);
        var_dump($notalta);
    
   

    ?>
    

    

</body>
</html>