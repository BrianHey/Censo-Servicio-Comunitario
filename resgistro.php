
<style type="text/css">
	
	body{
		background: lightblue;
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		font-size: 50px;
		color: white;
 		text-shadow: 1px 1px 10px black;
	}
</style>




 <center><button><a href="index.php"> Volver al Menu principal </a></button></center><br> <br>
<?php 

error_reporting(0); 

header('Content-Type: text/html; charset=UTF-8');
require 'conexion.php';


if (isset($_POST['boton'])) {

$Nombres =utf8_decode($_POST['Nombres']);
$Apellidos = utf8_decode($_POST['Apellidos']);
$CI = utf8_decode($_POST['CI']);
$VE = utf8_decode($_POST['VE']);
$FechaNacimiento = utf8_decode($_POST['FechaNacimiento']);
$Edad = utf8_decode($_POST['Edad']);
$CNE = utf8_decode($_POST['CNE']);
$TiempoComunidad = utf8_decode($_POST['TiempoComunidad']);
$Sexo = utf8_decode($_POST['Sexo']);
$Incapasitado = utf8_decode($_POST['Incapasitado']);
$Tipo = utf8_decode($_POST['Tipo']);
$Pensionado = utf8_decode($_POST['Pensionado']);
$Institucion = utf8_decode($_POST['Institucion']);
$Estadocivil = utf8_decode($_POST['Estadocivil']);
$Niveldeinstruccion = utf8_decode($_POST['Niveldeinstruccion']);
$ProfesionOficio = utf8_decode($_POST['Profesion/Oficio']);
$AQueSeDedica = utf8_decode($_POST['AQueSeDedica']);
$TrabajaActualmente = utf8_decode($_POST['TrabajaActualmente']);
$TelfCelular = utf8_decode($_POST['TelfCelular']);
$TelfHabitacion = utf8_decode($_POST['TelfHabitacion']);
$TelfOficina = utf8_decode($_POST['TelfOficina']);
$Email = utf8_decode($_POST['Email']);
$IngresoFamiliar = utf8_decode($_POST['IngresoFamiliar']);
$IngresoMensual =utf8_decode($_POST['IngresoMensual']);
$Observacion = utf8_decode($_POST['Observacion']);



// Grupo Familiar //

$NombresYApellidos1 = utf8_decode($_POST['NombresYApellidos1']);
$Sexo1 = utf8_decode($_POST['Sexo1']);
$Cedula1 = utf8_decode($_POST['Cedula1']);
$FechaNacimiento1 = utf8_decode($_POST['FechaNacimiento1']);
$Edad1 = utf8_decode($_POST['Edad1']);
$Discapacidad1 = utf8_decode($_POST['Discapacidad1']);
$TipoDiscapacidad1 = utf8_decode($_POST['TipoDiscapacidad1']);
$EmbarazoTemprano1 = utf8_decode($_POST['EmbarazoTemprano1']);
$Parentesco1 = utf8_decode($_POST['Parentesco1']);
$GradoInstrucion1 = utf8_decode($_POST['GradoInstrucion1']);
$CNE1 = utf8_decode($_POST['CNE1']);
$Profesion1 = utf8_decode($_POST['Profesion1']);
$Pensionado1 = utf8_decode($_POST['Pensionado1']);
$IngresoMensual1 = utf8_decode($_POST['IngresoMensual1']);


$NombresYApellidos2 = utf8_decode($_POST['NombresYApellidos2']);
$Sexo2 = utf8_decode($_POST['Sexo2']);
$Cedula2 = utf8_decode($_POST['Cedula2']);
$FechaNacimiento2 = utf8_decode($_POST['FechaNacimiento2']);
$Edad2 = utf8_decode($_POST['Edad2']);
$Discapacidad2 = utf8_decode($_POST['Discapacidad2']);
$TipoDiscapacidad2 = utf8_decode($_POST['TipoDiscapacidad2']);
$EmbarazoTemprano2 = utf8_decode($_POST['EmbarazoTemprano2']);
$Parentesco2 = utf8_decode($_POST['Parentesco2']);
$GradoInstrucion2 = utf8_decode($_POST['GradoInstrucion2']);
$CNE2 = utf8_decode($_POST['CNE2']);
$Profesion2 = utf8_decode($_POST['Profesion2']);
$Pensionado2 = utf8_decode($_POST['Pensionado2']);
$IngresoMensual2 = utf8_decode($_POST['IngresoMensual2']);

$NombresYApellidos3 = utf8_decode($_POST['NombresYApellidos3']);
$Sexo3 = utf8_decode($_POST['Sexo3']);
$Cedula3 = utf8_decode($_POST['Cedula3']);
$FechaNacimiento3 = utf8_decode($_POST['FechaNacimiento3']);
$Edad3 = utf8_decode($_POST['Edad3']);
$Discapacidad3 = utf8_decode($_POST['Discapacidad3']);
$TipoDiscapacidad3 = utf8_decode($_POST['TipoDiscapacidad3']);
$EmbarazoTemprano3 = utf8_decode($_POST['EmbarazoTemprano3']);
$Parentesco3 = utf8_decode($_POST['Parentesco3']);
$GradoInstrucion3 = utf8_decode($_POST['GradoInstrucion3']);
$CNE3 = utf8_decode($_POST['CNE3']);
$Profesion3 = utf8_decode($_POST['Profesion3']);
$Pensionado3 = utf8_decode($_POST['Pensionado3']);
$IngresoMensual3 = utf8_decode($_POST['IngresoMensual3']);

$NombresYApellidos4 = utf8_decode($_POST['NombresYApellidos4']);
$Sexo4 = utf8_decode($_POST['Sexo4']);
$Cedula4 = utf8_decode($_POST['Cedula4']);
$FechaNacimiento4 = utf8_decode($_POST['FechaNacimiento4']);
$Edad4 = utf8_decode($_POST['Edad4']);
$Discapacidad4 = utf8_decode($_POST['Discapacidad4']);
$TipoDiscapacidad4 = utf8_decode($_POST['TipoDiscapacidad4']);
$EmbarazoTemprano4 = utf8_decode($_POST['EmbarazoTemprano4']);
$Parentesco4 = utf8_decode($_POST['Parentesco4']);
$GradoInstrucion4 = utf8_decode($_POST['GradoInstrucion4']);
$CNE4 = utf8_decode($_POST['CNE4']);
$Profesion4 = utf8_decode($_POST['Profesion4']);
$Pensionado4= utf8_decode($_POST['Pensionado3']);
$IngresoMensual4 = utf8_decode($_POST['IngresoMensual3']);

$NombresYApellidos5 = utf8_decode($_POST['NombresYApellidos5']);
$Sexo5 = utf8_decode($_POST['Sexo5']);
$Cedula5 = utf8_decode($_POST['Cedula5']);
$FechaNacimiento5 = utf8_decode($_POST['FechaNacimiento5']);
$Edad5 = utf8_decode($_POST['Edad5']);
$Discapacidad5 = utf8_decode($_POST['Discapacidad5']);
$TipoDiscapacidad5 = utf8_decode($_POST['TipoDiscapacidad5']);
$EmbarazoTemprano5 = utf8_decode($_POST['EmbarazoTemprano5']);
$Parentesco5= utf8_decode($_POST['Parentesco5']);
$GradoInstrucion5 = utf8_decode($_POST['GradoInstrucion5']);
$CNE5 = utf8_decode($_POST['CNE5']);
$Profesion5 = utf8_decode($_POST['Profesion5']);
$Pensionado5= utf8_decode($_POST['Pensionado5']);
$IngresoMensual5 = utf8_decode($_POST['IngresoMensual5']);

$NombresYApellidos6 = utf8_decode($_POST['NombresYApellidos6']);
$Sexo6 = utf8_decode($_POST['Sexo6']);
$Cedula6 = utf8_decode($_POST['Cedula6']);
$FechaNacimiento6 = utf8_decode($_POST['FechaNacimiento6']);
$Edad6 = utf8_decode($_POST['Edad6']);
$Discapacidad6 = utf8_decode($_POST['Discapacidad6']);
$TipoDiscapacidad6 = utf8_decode($_POST['TipoDiscapacidad6']);
$EmbarazoTemprano6 = utf8_decode($_POST['EmbarazoTemprano6']);
$Parentesco6= utf8_decode($_POST['Parentesco6']);
$GradoInstrucion6 = utf8_decode($_POST['GradoInstrucion6']);
$CNE6 = utf8_decode($_POST['CNE6']);
$Profesion6 = utf8_decode($_POST['Profesion6']);
$Pensionado6= utf8_decode($_POST['Pensionado6']);
$IngresoMensual6 = utf8_decode($_POST['IngresoMensual6']);

$NombresYApellidos7 = utf8_decode($_POST['NombresYApellidos7']);
$Sexo7 = utf8_decode($_POST['Sexo7']);
$Cedula7 = utf8_decode($_POST['Cedula7']);
$FechaNacimiento7 = utf8_decode($_POST['FechaNacimiento7']);
$Edad7 = utf8_decode($_POST['Edad7']);
$Discapacidad7 = utf8_decode($_POST['Discapacidad7']);
$TipoDiscapacidad7 = utf8_decode($_POST['TipoDiscapacidad7']);
$EmbarazoTemprano7 = utf8_decode($_POST['EmbarazoTemprano7']);
$Parentesco7= utf8_decode($_POST['Parentesco7']);
$GradoInstrucion7 = utf8_decode($_POST['GradoInstrucion7']);
$CNE7 = utf8_decode($_POST['CNE7']);
$Profesion7 = utf8_decode($_POST['Profesion7']);
$Pensionado7= utf8_decode($_POST['Pensionado7']);
$IngresoMensual7 = utf8_decode($_POST['IngresoMensual7']);

$NombresYApellidos8 = utf8_decode($_POST['NombresYApellidos8']);
$Sexo8 = utf8_decode($_POST['Sexo8']);
$Cedula8 = utf8_decode($_POST['Cedula8']);
$FechaNacimiento8 = utf8_decode($_POST['FechaNacimiento8']);
$Edad8 = utf8_decode($_POST['Edad8']);
$Discapacidad8 = utf8_decode($_POST['Discapacidad8']);
$TipoDiscapacidad8 = utf8_decode($_POST['TipoDiscapacidad8']);
$EmbarazoTemprano8 = utf8_decode($_POST['EmbarazoTemprano8']);
$Parentesco8= utf8_decode($_POST['Parentesco8']);
$GradoInstrucion8 = utf8_decode($_POST['GradoInstrucion8']);
$CNE8 = utf8_decode($_POST['CNE8']);
$Profesion8 = utf8_decode($_POST['Profesion8']);
$Pensionado8= utf8_decode($_POST['Pensionado8']);
$IngresoMensual8 = utf8_decode($_POST['IngresoMensual8']);

$NombresYApellidos9 = utf8_decode($_POST['NombresYApellidos9']);
$Sexo9 = utf8_decode($_POST['Sexo9']);
$Cedula9 = utf8_decode($_POST['Cedula9']);
$FechaNacimiento9 = utf8_decode($_POST['FechaNacimiento9']);
$Edad9 = utf8_decode($_POST['Edad9']);
$Discapacidad9 = utf8_decode($_POST['Discapacidad9']);
$TipoDiscapacidad9 = utf8_decode($_POST['TipoDiscapacidad9']);
$EmbarazoTemprano9 = utf8_decode($_POST['EmbarazoTemprano9']);
$Parentesco9= utf8_decode($_POST['Parentesco9']);
$GradoInstrucion9 = utf8_decode($_POST['GradoInstrucion9']);
$CNE9= utf8_decode($_POST['CNE9']);
$Profesion9 = utf8_decode($_POST['Profesion9']);
$Pensionado9= utf8_decode($_POST['Pensionado9']);
$IngresoMensual9 = utf8_decode($_POST['IngresoMensual9']);

$NombresYApellidos10 = utf8_decode($_POST['NombresYApellidos10']);
$Sexo10 = utf8_decode($_POST['Sexo10']);
$Cedula10 = utf8_decode($_POST['Cedula10']);
$FechaNacimiento10 = utf8_decode($_POST['FechaNacimiento10']);
$Edad10 = utf8_decode($_POST['Edad10']);
$Discapacidad10 = utf8_decode($_POST['Discapacidad10']);
$TipoDiscapacidad10 = utf8_decode($_POST['TipoDiscapacidad10']);
$EmbarazoTemprano10 = utf8_decode($_POST['EmbarazoTemprano10']);
$Parentesco10= utf8_decode($_POST['Parentesco10']);
$GradoInstrucion10 = utf8_decode($_POST['GradoInstrucion10']);
$CNE10= utf8_decode($_POST['CNE10']);
$Profesion10 = utf8_decode($_POST['Profesion10']);
$Pensionado10= utf8_decode($_POST['Pensionado10']);
$IngresoMensual10 = utf8_decode($_POST['IngresoMensual10']);



 mysql_query("SELECT * FROM jefefamilia WHERE `CI`='$Cedula'") or die(mysql_error());

		$log = mysql_query("SELECT * FROM jefefamilia WHERE `CI`='$CI'");
				if (mysql_num_rows($log)>0) {
					
				  	echo '<h4 style="color: red; text-align: center;">La cedula que intenta registrar ya existe en la base de datos, revise el registro existente</h4>'; 
					
				}
				else{
					echo "<H1>¡Registro exitoso!</H1>";


	 mysql_query("INSERT INTO jefefamilia (Nombres, Apellidos,CI,VE,FechaNacimiento,Edad,CNE,TiempoComunidad,Sexo,Incapasitado,Tipo,Pensionado,Institucion,Estadocivil,NivelInstruccion,ProfesionOficio,AQueSeDedica,TrabajaActualmente,TelfCelular,TelfHabitacion,TelfOficina,Email,IngresoFamiliar,IngresoMensual,Observacion)
VALUES ('$Nombres','$Apellidos','$CI','$VE','$FechaNacimiento','$Edad','$CNE','$TiempoComunidad','$Sexo','$Incapasitado','$Tipo','$Pensionado','$Institucion','$Estadocivil','$Niveldeinstruccion','$ProfesionOficio','$AQueSeDedica','$TrabajaActualmente','$TelfCelular','$TelfHabitacion','$TelfOficina','$Email','$IngresoFamiliar','$IngresoMensual','$Observacion')") or die(mysql_error());

	 mysql_query("INSERT INTO NombresYApellidos (CedulaJefeFamiliar,NombreYApellido1,NombreYApellido2,NombreYApellido3,NombreYApellido4,NombreYApellido5,NombreYApellido6,NombreYApellido7,NombreYApellido8,NombreYApellido9,NombreYApellido10) VALUES ('$CI','$NombresYApellidos1','$NombresYApellidos2','$NombresYApellidos3','$NombresYApellidos4','$NombresYApellidos5','$NombresYApellidos6','$NombresYApellidos7','$NombresYApellidos8','$NombresYApellidos9','$NombresYApellidos10')") or die(mysql_error());

	 mysql_query("INSERT INTO sexo (CedulaJefeFamiliar,Sexo1,Sexo2,Sexo3,Sexo4,Sexo5,Sexo6,Sexo7,Sexo8,Sexo9,Sexo10) VALUES ('$CI','$Sexo1','$Sexo2','$Sexo3','$Sexo4','$Sexo5','$Sexo6','$Sexo7','$Sexo8','$Sexo9','$Sexo10')") or die(mysql_error());

	 mysql_query("INSERT INTO cedula (CedulaJefeFamiliar,Cedula1,Cedula2,Cedula3,Cedula4,Cedula5,Cedula6,Cedula7,Cedula8,Cedula9,Cedula10) VALUES ('$CI','$Cedula1','$Cedula2','$Cedula3','$Cedula4','$Cedula5','$Cedula6','$Cedula7','$Cedula8','$Cedula9','$Cedula10')") or die(mysql_error());

	  mysql_query("INSERT INTO fechanacimiento (CedulaJefeFamiliar,FechaNacimiento1,FechaNacimiento2,FechaNacimiento3,FechaNacimiento4,FechaNacimiento5,FechaNacimiento6,FechaNacimiento7,FechaNacimiento8,FechaNacimiento9,FechaNacimiento10) VALUES ('$CI','$FechaNacimiento1','$FechaNacimiento2','$FechaNacimiento3','$FechaNacimiento4','$FechaNacimiento5','$FechaNacimiento6','$FechaNacimiento7','$FechaNacimiento8','$FechaNacimiento9','$FechaNacimiento10')") or die("que fueeeeeeeeeeeee". mysql_error());

	  mysql_query("INSERT INTO edad (CedulaJefeFamiliar,Edad1,Edad2,Edad3,Edad4,Edad5,Edad6,Edad7,Edad8,Edad9,Edad10) VALUES ('$CI','$Edad1','$Edad2','$Edad3','$Edad4','$Edad5','$Edad6','$Edad7','$Edad8','$Edad9','$Edad10')") or die(mysql_error());

	  mysql_query("INSERT INTO discapacidad (CedulaJefeFamiliar,Discapacidad1,Discapacidad2,Discapacidad3,Discapacidad4,Discapacidad5,Discapacidad6,Discapacidad7,Discapacidad8,Discapacidad9,Discapacidad10) VALUES ('$CI','$TipoDiscapacidad1','$TipoDiscapacidad2','$TipoDiscapacidad3','$TipoDiscapacidad4','$TipoDiscapacidad5','$TipoDiscapacidad6','$TipoDiscapacidad7','$TipoDiscapacidad8','$TipoDiscapacidad9','$TipoDiscapacidad10')") or die(mysql_error());

	   mysql_query("INSERT INTO embarazotemprano (CedulaJefeFamiliar,EmbarazoTemprano1,EmbarazoTemprano2,EmbarazoTemprano3,EmbarazoTemprano4,EmbarazoTemprano5,EmbarazoTemprano6,EmbarazoTemprano7,EmbarazoTemprano8,EmbarazoTemprano9,EmbarazoTemprano10) VALUES ('$CI','$EmbarazoTemprano1','$EmbarazoTemprano2','$EmbarazoTemprano3','$EmbarazoTemprano4','$EmbarazoTemprano5','$EmbarazoTemprano6','$EmbarazoTemprano7','$EmbarazoTemprano8','$EmbarazoTemprano9','$EmbarazoTemprano10')") or die(mysql_error());

	  mysql_query("INSERT INTO parentesco (CedulaJefeFamiliar,Parentesco1,Parentesco2,Parentesco3,Parentesco4,Parentesco5,Parentesco6,Parentesco7,Parentesco8,Parentesco9,Parentesco10) VALUES ('$CI','$Parentesco1','$Parentesco2','$Parentesco3','$Parentesco4','$Parentesco5','$Parentesco6','$Parentesco7','$Parentesco8','$Parentesco9','$Parentesco10')") or die(mysql_error());

	   mysql_query("INSERT INTO instruccion (CedulaJefeFamiliar,Instruccion1,Instruccion2,Instruccion3,Instruccion4,Instruccion5,Instruccion6,Instruccion7,Instruccion8,Instruccion9,Instruccion10) VALUES ('$CI','$GradoInstrucion1','$GradoInstrucion2','$GradoInstrucion3','$GradoInstrucion4','$GradoInstrucion5','$GradoInstrucion6','$GradoInstrucion7','$GradoInstrucion8','$GradoInstrucion9','$GradoInstrucion10')") or die(mysql_error());

	   mysql_query("INSERT INTO cne (CedulaJefeFamiliar,cne1,cne2,cne3,cne4,cne5,cne6,cne7,cne8,cne9,cne10) VALUES ('$CI','$CNE1','$CNE2','$CNE3','$CNE4','$CNE5','$CNE6','$CNE7','$CNE8','$CNE9','$CNE10')") or die(mysql_error());

	    mysql_query("INSERT INTO profesion (CedulaJefeFamiliar,Profesion1,Profesion2,Profesion3,Profesion4,Profesion5,Profesion6,Profesion7,Profesion8,Profesion9,Profesion10) VALUES ('$CI','$Profesion1','$Profesion2','$Profesion3','$Profesion4','$Profesion5','$Profesion6','$Profesion7','$Profesion8','$Profesion9','$Profesion10')") or die(mysql_error());

	    mysql_query("INSERT INTO pensionado (CedulaJefeFamiliar,Pensionado1,Pensionado2,Pensionado3,Pensionado4,Pensionado5,Pensionado6,Pensionado7,Pensionado8,Pensionado9,Pensionado10) VALUES ('$CI','$Pensionado1','$Pensionado2','$Pensionado3','$Pensionado4','$Pensionado5','$Pensionado6','$Pensionado7','$Pensionado8','$Pensionado9','$Pensionado10')") or die(mysql_error());

	     mysql_query("INSERT INTO ingresomensual (CedulaJefeFamiliar,IngresoMensual1,IngresoMensual2,IngresoMensual3,IngresoMensual4,IngresoMensual5,IngresoMensual6,IngresoMensual7,IngresoMensual8,IngresoMensual9,IngresoMensual10) VALUES ('$CI','$IngresoMensual1','$IngresoMensual2','$IngresoMensual3','$IngresoMensual4','$IngresoMensual5','$IngresoMensual6','$IngresoMensual7','$IngresoMensual8','$IngresoMensual9','$IngresoMensual10')") or die(mysql_error());

}

}

?>

