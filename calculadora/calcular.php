<?php
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $operacion = $_POST["operacion"];


    $resultado = " ";


    if ($operacion == "suma") {
        $resultado = $n1 + $n2; 
    }

    if ($operacion == "resta") {
        $resultado = $n1 - $n2; 
    }

    if ($operacion == "multiplicacion") {
        $resultado = $n1 * $n2; 
    }

    if ($operacion == "division") {
        $resultado = $n1 / $n2; 
    }

    echo "Resultado = " . $resultado;

?>