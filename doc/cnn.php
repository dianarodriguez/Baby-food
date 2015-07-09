<?
function cnn(){
$host = "localhost";
$usr = "root";
$ bd= "registro";
$clave = " ";
if(!($idconex=mysql_connect($host,$usr,$clave)))
{
echo "error";
exit();
}
if(!mysql_select_db($bd,$idConex))
{
echo "error";
exit();
}
return idConex;
}
$idConex=cnn();
?>
