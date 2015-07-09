<?
$connect = mysql_connect(localhosr,cursophp," ")
or die ("No se puede conectar");
mysql_select_db(diana)
or die("no se puede selecc la BD");

$host = "localhost";
$usr = "cursophp";
$ bd= "registro";
if(!($connect=mysql_connect($host,$usr)))
{
echo("Error");
exit();
}
if(!mysql_select_db($bd,$connect))
{
acho("Error");
exit();
}
return $connect;
}
$connect= cnn ();
