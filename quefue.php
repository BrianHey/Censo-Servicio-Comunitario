<?php 

require 'conexion.php';

$consulta = mysql_query("SELECT * FROM `fechanacimiento` WHERE `CedulaJefeFamiliar`='25273720'");

$row = mysql_fetch_array($consulta);

echo $row[2];


$consultaFechaNacimiento = mysql_query("SELECT * FROM fechanacimiento WHERE `CedulaJefeFamiliar`='25273720'");
	$FechaNacimiento = mysql_fetch_array($consultaFechaNacimiento);

	echo $FechaNacimiento[2];

 ?>


 	$consultaFechaNacimiento = mysql_query("SELECT * FROM fechanacimiento WHERE `CedulaJefeFamiliar`='$Cedula'");
	$FechaNacimiento = mysql_fetch_array($consultaFechaNacimiento);

	$consultaEdad = mysql_query("SELECT * FROM edad WHERE `CedulaJefeFamiliar`='$Cedula'");
	$Edad = mysql_fetch_array($consultaEdad);

	$consultaDiscapacidad = mysql_query("SELECT * FROM discapacidad WHERE `CedulaJefeFamiliar`='$Cedula'");
	$Discapacidad = mysql_fetch_array($consultaDiscapacidad);

	$consultaEmbarazotemprano = mysql_query("SELECT * FROM embarazotemprano WHERE `CedulaJefeFamiliar`='$Cedula'");
	$Embarazotemprano = mysql_fetch_array($consultaEmbarazotemprano);

	$consultaParentesco = mysql_query("SELECT * FROM parentesco WHERE `CedulaJefeFamiliar`='$Cedula'");
	$Parentesco = mysql_fetch_array($consultaParentesco);

	$consultaInstruccion = mysql_query("SELECT * FROM instruccion WHERE `CedulaJefeFamiliar`='$Cedula'");
	$Instruccion = mysql_fetch_array($consultaInstruccion);

	$consultaCNE = mysql_query("SELECT * FROM cne WHERE `CedulaJefeFamiliar`='$Cedula'");
	$CNE = mysql_fetch_array($consultaCNE);

	$consultaProfesion = mysql_query("SELECT * FROM profesion WHERE `CedulaJefeFamiliar`='$Cedula'");
	$Profesion = mysql_fetch_array($consultaProfesion);

	$consultaPensionado = mysql_query("SELECT * FROM pensionado WHERE `CedulaJefeFamiliar`='$Cedula'");
	$Pensionado = mysql_fetch_array($consultaPensionado);

	$consultaIngresoMensual = mysql_query("SELECT * FROM ingresomensual WHERE `CedulaJefeFamiliar`='$Cedula'");
	$IngresoMensual = mysql_fetch_array($consultaIngresoMensual);