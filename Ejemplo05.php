<?php


function incremento(){
    $x=3;
    return $x++;
}

echo incremento()."<br>";
$x=3;

function suma($valor){
    return $valor++;
}

echo suma($x)."<br>";

function saludo($titulo="Sr.",$nombre="Desconocido"){
    return "Hola".$titulo." ".$nombre;
    
    echo saludo()."<br>";
    echo saludo('prof.')."<br>";
    echo saludo('',"Saul")."<br>";
}

?>