<?php

class contactanos extends Controlador
{
	
	function __construct()
	{

		//Invocar al metodo MostrarVista
		//$this->mostrarVista("main/index");
	}

	function mostrarVista()
	{
		$nombre = "usuarios";
		//Codigo para mostrar la Vista
		//Generar el nombre de la vista: views/consulta/index.php
		$fileName = "views/" . $nombre . "agregar.php";

		//Incluir el archivo (codigo) de la vista
		require_once("$fileName");

	}

	function saludo()
	{
		echo "Metodo SALUDO de MAIN<br>";
	}
}

?>