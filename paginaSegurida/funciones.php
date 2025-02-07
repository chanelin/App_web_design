<?php
///////////////////////////////////////////////////////
/////////////// Variables globales ///////////////////
/////////////////////////////////////////////////////
define('servidor','localhost');
define('basededatos','dbperrona');
define('usuario','lectura');
define('password','mipassword');
///////////////////////////////////////////////////////////////////////////
function conectar(){
    if(!($conexion = mysqli_connect(servidor, usuario, password, basededatos))){
        echo "Error al conectar a la base de datos";
        exit();
    }
    return $conexion;
}
conectar();
echo "todo bien!";


?>