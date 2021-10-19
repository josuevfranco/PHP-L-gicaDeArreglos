<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    $array =array(
        1 => "Java Script",
        2 => "Java",
        3 => "C#",
        4 => "Angular",
        5 => "Go",
        6 => "Swift",
        7 => "Laravel",
        8 => "Perl",
        9 => "Ruby",
        10 => "Python",
        11 => "Rust",
        12 => "Php",
        13 => "React",
        14 => "Lenguaje R",
        15 => "Ensamblador",
        16 => "SQL",
    );
    


            
        function buscaColor(string $lengp){    
            $colores = array(
                "Java Script" => "salmon",
                "Java" => "red",
                "C#" => "gold",
                "Angular" => "orange",
                "Go" => "peachpuff",
                "Swift" => "greenyellow",
                "Laravel" => "springgreen",
                "Perl" => "darkturquoise",
                "Ruby" => "mediumslateblue",
                "Python" => "lightpink",
                "Rust" => "mistyrose",
                "Php" => "lightslategray",
                "React" => "navajowhite",
                "Lenguaje R" => "brown",
                "Ensamblador" => "tan",
                "SQL" => "lavender",
            ); 
                
            foreach($colores as $lenguaje=>$color){
                if ($lenguaje == $lengp){
                    return $color;
                }
            }
        }

        //LLenar el array sin repetir nombres
        $valoresRandom = array();
        $final1 = array();
        $final2 = array();
        $valorRandomPrimero = mt_rand(1,16);

        array_push($valoresRandom, $valorRandomPrimero);
        array_push($final1, $array[$valorRandomPrimero]);

        $x = 1;

        while ($x <= 5) {
            $siguienteValorRadom = mt_rand(1, 16);
            if(in_array($siguienteValorRadom, $valoresRandom)){
                continue;
            }else{
                array_push($valoresRandom, $siguienteValorRadom);
                array_push($final1, $array[$siguienteValorRadom]);
                $x++;
            }
        }


        //Copiamos el contenido en otro vector
        $final2 = json_decode( json_encode($final1), true);

        //Cambiar el orden de los elementos del vec
        shuffle($final2);


        $matriz = array();
        $c = 0;
        $c2 = 0;
        for ($row = 0; $row < 4; $row++) {
          for ($col = 0; $col < 3; $col++) {
              if ($c <= 5 ){
                  $matriz[$row][$col] = $final1[$c];
                  $c++;
              }
              else{
                  $c++;
                  $matriz[$row][$col] = $final2[$c2];
                  $c2++;
              }
          }
        } 

    

        require "vista.memoria.php";
    ?>    
</body>
</html>