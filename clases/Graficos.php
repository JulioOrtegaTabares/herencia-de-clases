<?php
include ("Bd.php");
class Graficos extends Bd
{
	function Graficos()
	{
		
	}
	
	/*
	**
	*Esta funcion se encarga de imprimir el titulo
	*@t recibe un texto ingresado en el index
	*@return  un texto en tamaño grande
	*/
	function imp_titulo($t)
	{
		$titulo="";
		$titulo.="<h1>".$t."</h1>";
		return $titulo;
	}
	
	/*
	**
	*Esta funcion se encarga de imprimir una tabla 
	*@s esta variable recoge una consulta sql
	*@return  una tabla con los datos de la consulta
	*/
	function escribir($s)
	{
		
		$r=$this->retornar_usuarios($s);
		echo "<table style='font: normal 18px/150% Arial, Helvetica, sans-serif; background: #fff; overflow: hidden; border: 5px solid #006699; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; ' ><tr>";
		while($fila=mysqli_fetch_array($r))
		{
			echo "<tr>";
			for( $i=0; $i<mysqli_num_fields($r); $i++ )
			{
				echo "<td>".$fila[$i]."<br></td>";
			}
		echo "</tr>";
		}
		echo "</tr></table>";	
	}
}
?>