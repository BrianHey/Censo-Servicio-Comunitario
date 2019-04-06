
<style type="text/css">
	
	body{
		background: lightblue;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		font-size: 50px;
		color: red;
 		text-shadow: 1px 1px 10px black;
	}
</style>

<H1>¡Registro ELIMINADO!</H1>
 <button><a href="index.php"> Volver al Menu principal </a></button>
<?php 


	require 'conexion.php';

	$cedula =  $_POST['Cedula'];
	

	mysql_query("DELETE FROM cedula WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM cne WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM discapacidad WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM edad WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM embarazotemprano WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM fechanacimiento WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM ingresomensual WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM instruccion WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM jefefamilia WHERE `CI`='$cedula'");

	mysql_query("DELETE FROM nombresyapellidos WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM parentesco WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM pensionado WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM profesion WHERE `CedulaJefeFamiliar`='$cedula'");

	mysql_query("DELETE FROM sexo WHERE `CedulaJefeFamiliar`='$cedula'");

 ?>