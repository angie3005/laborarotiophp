<?php
        $promedio = 0.35;
        $calificacion_examen = 0.35;
        $calificacion_trabajo = 0.30;
   
        if (isset($_REQUEST["enviar"])) {
             $suma = ($_REQUEST["valor1"] + $_REQUEST["valor2"] + $_REQUEST["valor3"]);
             $porcentaje = ($suma * $promedio);
  
         
         $calificacion_examen_final = ($_REQUEST["valor4"] * $calificacion_examen);

        
         $calificacion_trabajo_final = ($_REQUEST["valor5"] * $calificacion_trabajo);
         
         $nota_final =($porcentaje + $calificacion_examen_final + $calificacion_trabajo_final);

           echo "el promedio de los tres parciales es: ". $porcentaje . "<br>";
           echo "calificacion del examen final es: ". $calificacion_examen_final . "<br>";
           echo "calificacion del trabajo final es: ". $calificacion_trabajo_final . "<br>"; 
           echo "la nota final es: ". $nota_final . "<br>";        
           
           if ($nota_final>3) {
                echo "el estudiante APROBO";   
         }
         else {
                echo "el estudiante NO APROBO";
         }

        } 

?>

