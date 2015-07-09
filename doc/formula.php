<?
if($HTTP_GET_VARS["cmdEnviar"]=="Enviar")
{
require ("../../../../../wamp/www/proyectoW/principal/cnn.php");
$nombre=$HTTP_GET_VARS["nombre"];
$apellido=$HTTP_GET_VARS["apellido"];
$correo=$HTTP_GET_VARS["correo"];
$edad=$HTTP_GET_VARS["edad"];
$pais=$HTTP_GET_VARS["pais"];
$sexo=$HTTP_GET_VARS["sexo"];
$cmdSQL="INSERT INTO registro(nombre,apellido,correo,edad,pais,sexo)";
$cmdSQL="VALUES('$nombre','$apellido','$correo','$edad','$pais','$sexo')";
if(mysql_query($cmdSQL))
echo "<P> Se ha ejecutado con exito:<BR>$cmdSQL</P>";
else
echo"<p>Se ha producido un error</p>";
mysql_close($idConex);
}
else
{
?>






