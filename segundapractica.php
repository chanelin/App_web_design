<?php 
function saludar(){
    echo "<p>Hola</p>";

}
saludar();
saludar();
saludar();
//funcion que regresa valor
function suma ($x, $y){
    return $x + $y;
}

echo "<p>".suma(5 ,6)."</p>";
//funcion anonima
$saludo = function($hola){
    return "<p>Hola me llamo $hola</p>";
};
echo $saludo("Erick");
//funcion una solo linea
$multiplicar = fn($x, $y) => $x * $y;
echo $multiplicar(12, 25);
//variables locales y locales
$variable_global = 15;
function miFuncion($variable_global= 16){
    global $variable_global;
    echo "<p>".$variable_global."</p>";
    $variable_global++;
}
miFuncion();
echo "<p>".$variable_global."</p>";
function sumaContador(){
    static $contador = 0;
    $contador++;
    return $contador;
}    
echo "<p>".sumaContador()."</p>";
echo "<p>".sumaContador()."</p>";  
echo "<p>".sumaContador()."</p>";



?>