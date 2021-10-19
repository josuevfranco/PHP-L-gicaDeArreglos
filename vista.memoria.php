<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tablero</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Pacifico&display=swap" rel="stylesheet">

</head>

<body>
   
   <div class="centrar">
        <table>
        <?php
      
        echo "<caption> Juego de Memoria </caption>";
            
        for ($row = 0; $row < 4; $row++) {
            echo "<tr>";
            
            for ($col = 0; $col < 3; $col++) {
                $clave = buscaColor($matriz[$row][$col]);
                echo "<td bgcolor='$clave' >"  .$matriz[$row][$col]. "</td>";
            }
            
            echo "</tr>";
            echo "<br>";
        }
        ?>
        </table>
        
   </div>
   
   
   <footer>
       <p>Diviértete Aprendiendo</p>
       <p>Por: Josué Vázquez Franco</p>
   </footer>
    
</body>
</html>