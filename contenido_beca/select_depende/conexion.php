<?php
function conectar()
{
	mysql_connect("localhost", "root", "archie");
	mysql_select_db("tramitesgeo");
}

function desconectar()
{
	mysql_close();
}
?>
