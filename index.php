<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inicio</title>
</head>
<body>
<?php
include ("clases/Graficos.php");
$obj_grafico=new Graficos();
//echo $obj_grafico->retornar_fecha();
//echo $obj_grafico->imp_titulo($obj_grafico->retornar_fecha());
$obj_grafico->ini();
//echo $obj_grafico->imp_titulo($obj_grafico->usuario);
$obj_grafico->escribir("select * from jugador ");
?>
</body>
</html>