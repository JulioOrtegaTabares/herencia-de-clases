<?php
class Bd
{
	public $servidor;
	public $usuario;
	public $clave;
	public $bd;
	
	function Bd()
	{
		
	}
	
	/*
	**
	*Esta funcion se encarga de tomar los datos de conexión
	*/
	function ini()
	{
		include("config.php");
		$this->servidor="$servidor";
		$this->usuario="$usuario";
		$this->clave="$clave";
		$this->bd="$bd";
	}
	
	
	/*
	**
	*Esta funcion se encarga de realizar la conexión
	*@return  la conexion inicial
	*/
	function conectar()
	{
		return mysqli_connect($this->servidor,$this->usuario,$this->clave,$this->bd);
	}
	
	/*
	**
	*Esta funcion se encarga de mostrar la fecha del sistema
	*@return  la fecha
	*/
	function retornar_fecha()
	{
		//$fecha="2016-01-01";
		//$fecha="la fecha actual es " . date("d") . " del " . date("m") . " de " . date("Y");
		$fecha=date('Y-m-d');
		return $fecha;		
	}
	
	/*
	**
	*Esta funcion se encarga de tomar una consulta sql
	*@s esta variable recoge una consulta sql
	*@return  la consulta
	*/
	function retornar_usuarios($s)
	{
		$con=$this->conectar();
		$resultado=$con->query($s);
		return $resultado;
	}
	
}
?>