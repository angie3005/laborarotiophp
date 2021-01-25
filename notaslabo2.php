<?php
       $salario_mensual = 737000;
       $comision = 50000;
       $porcentaje = 0.05;

       if ($_REQUEST["operar"]) {


        $comision_total = ($_REQUEST["valor2"] * $comision);
        $porcentaje_venta = ($_REQUEST["valor3"] * $porcentaje);
        $salario_mas_comisiones = ($salario_mensual + $comision_total + $porcentaje_venta);




        echo "el nombre del vendedor es :" . $_REQUEST["valor1"] . "<br>";
        echo "salario basico mesual: " . $salario_mensual . "<br>";
        echo "comision total por autos vendidos : " . $comision_total . "<br>";
        echo "porcentaje total por ventas del mes:" . $porcentaje_venta. "<br>";
        echo "salario total del mes : ".  $salario_mas_comisiones. "<br>";
        


       }

?>

