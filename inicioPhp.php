<?php
echo "<p> Hola mundo</p>";

$integer =1;
$float =4.8;
$bool=true;
$string="Hola mundo";
$array= array('blue' =>"azul" ,'2'=>2 );
$arrayNormal= array('pepe','juan');
$globalVar="Variable global";


echo $integer;
echo $float;
echo $array['blue'];
$globalVarS="Variable global start";
echo  $arrayNormal[1];

//Variables locales y globales
function GlobalVariable(){

  $localVar="Local var";

  echo $localVar;
  echo $GLOBALS["globalVarS"];
  echo $GLOBALS['globalVar'];

}
GlobalVariable();

//Variables superglobals
/*
http://php.net/manual/es/language.variables.superglobals.php
Descripción
Algunas variables predefinidas en PHP son "superglobales", lo que significa que
están disponibles en todos los ámbitos a lo largo del script. No es necesario
 emplear global $variable; para acceder a ellas dentro de las funciones o
 métodos.

Las variables superglobals son:

$GLOBALS
$_SERVER
$_GET
$_POST
$_FILES
$_COOKIE
$_SESSION
$_REQUEST
$_ENV
*/



?>
