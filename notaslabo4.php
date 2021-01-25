<?php
        
       $estatura = ($_REQUEST["valor3"] * $_REQUEST["valor3"] );
       $imc = ($_REQUEST["valor2"] / $estatura);

    if($imc<=18.5) {
        echo "por debajo del peso";
    }
    elseif($imc>=18.5 and $imc<=24.9) {
        echo "saludable";
    }
    elseif($imc>=25.0 and $imc<=29.9) {
        echo "con sobrepeso";
    }
    elseif($imc>=30.0 and $imc<=39.0) {
        echo "obeso";
    }
    elseif($imc>=40.0) {
        echo "obesidad morbida";
    }
    else{
        echo "algo salio mal,  intentalo de nuevo...";
    }
?>

