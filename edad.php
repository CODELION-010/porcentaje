<?php

include 'edad.html';

//iniciacion de variables
$año1 = null;
$año2 = null;

//verificacio POST
if (isset($_POST['año1']) && isset($_POST['año2'])) {
    $año1 = $_POST['año1'];
    $año2 = $_POST['año2'];
}

//funcion RESTAR

$total = $año1 - $año2;

// imprime varios mensajes
echo "tu edad es: " . $total . " años" . "</br>" ;

if ($total >= 50 && $total <= 100) { 
    echo "La edad es Sabiduria, Medita si has <br>
    Vivido Bien tu Vida";  
}
if ($total >=40 && $total <= 50) { 
    echo "Aun Tines Mucho Tiempo para aprender cosas nuevas, APROVÉCHALO!!";  
}

if ($total >=18 && $total <=39) { 
    echo "Estas En la Flor de la Juventud, <br> VIVELA AL MAXIMO!!";  
}

if ($total >=12 && $total <=17) { 
    echo "eres un adolescente, toma buenas Decisiones para tu futuro";  
} 
?>