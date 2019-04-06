<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
</head>
<body>
<style type="text/css">
	p{
		text-align: center;
	}
</style>
<?php 

//error_reporting(0); 


$Cedula = $_POST['Cedula'];


require 'conexion.php';

	$consulta = mysql_query("SELECT * FROM jefefamilia WHERE `CI`='$Cedula'");
	$row = mysql_fetch_array($consulta);

	$consultaNombres = mysql_query("SELECT * FROM nombresyapellidos WHERE `CedulaJefeFamiliar`='$Cedula'");
	$NombresYApellidos = mysql_fetch_array($consultaNombres);

	$consultaSexo = mysql_query("SELECT * FROM sexo WHERE `CedulaJefeFamiliar`='$Cedula'");
	$Sexo = mysql_fetch_array($consultaSexo);

	$consultaCedulas = mysql_query("SELECT * FROM Cedula WHERE `CedulaJefeFamiliar`='$Cedula'");
	$Cedulas = mysql_fetch_array($consultaCedulas);

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


?>
<!--
    <table style="display: block; margin: auto;" border="1" cellspacing="0" cellpadding="0" width="971">
        <tbody>
            <tr>
                <td width="971" colspan="7" valign="top">
                    <p align="center">
                        <strong>ESTUDIO DEMOGRÁFICO Y SOCIOECONÓMICO</strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="803" colspan="6" valign="top">
                    <p>
                        CONSEJO
                        COMUNAL: <input style="width: 70%">
                    </p>
                    <p>
                        CODIGO: <input style="width: 10%"> RIF: <input style="width: 10%"><br><br> NRO
                        DE CUENTA: <input style="width: 70%">
                    </p>
                </td>
                <td width="168" valign="top">
                    <p>
                        PLANILLA Nº <input style="width: 70%">
                    </p>
                    <p>
                        FECHA: <input style="width: 70%">
                    </p>
                </td>
            </tr>
            <tr>
                <td width="971" colspan="7" valign="top">
                    <p>
                        <strong>
                            I. UBICACIÓN GEOGRÁFICA DE LA COMUNIDAD
                        </strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="117" valign="top">
                    <p>
                        ESTADO: <input style="width: 80%">
                    </p>
                </td>
                <td width="129" valign="top">
                    <p>
                        MUNICIPIO: <input style="width: 80%">
                    </p>
                </td>
                <td width="129" valign="top">
                    <p>
                        PARROQUIA: <input style="width: 80%">
                    </p>
                </td>
                <td width="129" valign="top">
                    <p>
                        SECTOR : <input style="width: 80%">
                    </p>
                </td>
                <td width="211" valign="top">
                    <p>
                        NOMBRE DE LA COMUNIDAD: <input style="width: 80%">
                    </p>
                </td>
                <td width="255" colspan="2" valign="top">
                    <p>
                        DIRECCIÓN : <input style="width: 80%">
                    </p>
                </td>
            </tr>
            <tr height="0">
                <td width="117">
                </td>
                <td width="129">
                </td>
                <td width="129">
                </td>
                <td width="129">
                </td>
                <td width="211">
                </td>
                <td width="87">
                </td>
                <td width="168">
                </td>
            </tr>
        </tbody>
    </table><br><br> -->
    <!-- II. DATOS PERSONALES DEL JEFE DEL GRUPO FAMILIAR -->

 <button><a href="index.php"> Volver al Menu principal </a></button>
	<center><h1>Datos de: <?php echo $row[1]." ".$row[2];?> </h1></center>

<form action="editar.php" method="post">
    <table style="display: block; margin: auto;" border="1" cellspacing="0" cellpadding="0" width="971">
        <tbody>
            <tr>
                <td width="202" colspan="2" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong>
                            II. DATOS PERSONALES DEL JEFE DEL GRUPO FAMILIAR
                        </strong>
                    </p>
                </td>
                <td width="300" colspan="2" valign="top">
                    <p>
                        NOMBRES: <input style="width: 60%" name="Nombres" value="<?php echo $row[1]; ?>">
                    </p>
                    <p>
                        APELLIDOS: <input style="width: 60%" name="Apellidos" value="<?php echo $row[2]; ?>">
                    </p>
                </td>
                <td width="144" valign="top">
                    <p>
                        C.I. Nº: <input style="width: 60%" name="CI" value="<?php echo $row[3]; ?>">
                    </p>
                    <p>
                       <?php echo $row[4]; ?>
                    </p>
                </td>
                <td width="3007" colspan="2" valign="top">
                    <p>
                        FECHA DE NACIMIENTO:<input style="width: 70%" name="FechaNacimiento" placeholder="Dia/Mes/Año" value="<?php echo $row[5]; ?>">
                    </p>
                    <p>
                        EDAD: <input style="width: 60%" name="Edad" value="<?php echo $row[6]; ?>"> 
                    </p>
                    <p>
                        CNE :<?php echo $row[7]; ?>
                    </p>
                    
                    <p>
                        TIEMPO EN LA COMUNIDAD: <input style="width: 90%" name="TiempoComunidad" value="<?php echo $row[8]; ?>">
                    </p>
                </td>
                <td width="107" valign="top">
                    <p align="center">
                        SEXO: 
                    </p>
                    <p>
                      <?php echo $row[9]; ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="342" colspan="3" valign="top">
                    <p>
                        INCAPASITADO: <?php echo $row[10]; ?> <br>TIPO: <input style="width: 90%" name="Tipo" value="<?php echo $row[11]; ?>">
                    </p>
                    <p>
                        PENSIONADO: <?php echo $row[12]; ?> <br> Institución: <input style="width: 90%" name="Institucion" value="<?php echo $row[13]; ?>">
                    </p>
                </td>
                <td width="100" rowspan="2" valign="top">
                    <p>
                        ESTADO CIVIL:
                    </p>
                    <p>
                         <?php echo $row[18]; ?>
                    </p>
                </td>
                <td width="0" colspan="2" rowspan="2" valign="top">
                    <p>
                        NIVEL DE INSTRUCCIÓN: 
                    </p>
                    <p>
                      	<?php echo $row[19]; ?>
                    </p>
                </td>
                <td width="362" rowspan="2" valign="top">
                    <p>
                      PROFESIÓN /OFICIO
                         <input style="width: 90%" name="Profesion/Oficio" value="<?php echo $row[20]; ?>">
                    </p>
                    <p>
                        Indique a que se dedica:  <input style="width: 90%" name="AQueSeDedica" value="<?php echo $row[21]; ?>">
                    </p>
                </td>
                <td width="107" rowspan="2" valign="top">
                    <p>
                        TRABAJA ACTUALMENTE <br><br>
                    	<?php echo $row[22]; ?>
                    </p>
                   
                </td>
            </tr>
            <tr>
                <td width="115" valign="top">
                    <p>
                        TELF. CEL. <input style="width: 90%" name="TelfCelular" value="<?php echo $row[14]; ?>">
                    </p>
                    <p>
                        TELF. HAB. <input style="width: 90%" name="TelfHabitacion" value="<?php echo $row[15]; ?>">
                    </p>
                </td>
                <td width="177" colspan="2" valign="top" >
                    <p>
                        TELF. OFIC. <input style="width: 90%" name="TelfOficina" value="<?php echo $row[16]; ?>">
                    </p>
                    <p>
                        E-MAIL <input style="width: 90%" name="Email" value="<?php echo $row[17]; ?>">
                    </p>
                </td>
            </tr>
            <tr>
                <td width="502" colspan="4" valign="top">
                    <p>
                        CLASIFICACIÓN DEL INGRESO FAMILIAR
                    </p>
                    <p>
                       
                        <?php echo $row[23]; ?>
                    </p>
                </td>
                <td width="469" colspan="4" valign="top">
                    <p>
                        INGRESO MENSUAL Bs. <input style="width: 90%" name="IngresoMensual" value="<?php echo $row[24]; ?>">
                    </p>
                </td>
            </tr>
            
        </tbody>
    </table>

		<!-- III. CARACTERÍSTICAS DEL GRUPO FAMILIAR-->
<br> <br>
    <table  style="display: block; margin: auto;" border="1" cellspacing="0" cellpadding="0" width="971">
        <tbody>
            <tr>
                <td width="1001" colspan="14" valign="top">
                    <p>
                        <strong>III. </strong>
                        <strong>CARACTERÍSTICAS DEL GRUPO FAMILIAR</strong>
                        <strong></strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="36" valign="top">
                    <p align="center">
                        Nº
                    </p>
                </td>
                <td width="180" valign="top">
                    <p align="center">
                        <strong></strong>
                    </p>
                    <p>
                        <strong> Nombres y Apellidos</strong>
                    </p>
                </td>
                <td width="40" valign="top">
                    <p align="center">
                        <strong></strong>
                    </p>
                    <p align="center">
                        <strong>sexo</strong>
                    </p>
                </td>
                <td width="73" valign="top">
                    <p align="center">
                        <strong></strong>
                    </p>
                    <p align="center">
                        <strong>Cédula identidad</strong>
                    </p>
                </td>
                <td width="147" valign="top">
                    <p align="center">
                        <strong></strong>
                    </p>
                    <p align="center">
                        <strong>F/ Ncto</strong>
                        <strong>.</strong>
                    </p>
                </td>
                <td width="47" valign="top">
                    <p align="center">
                        <strong></strong>
                    </p>
                    <p align="center">
                        <strong>Edad</strong>
                    </p>
                </td>
                <td width="95" valign="top">
                    <p align="center">
                        <strong>Personas/</strong>
                    </p>
                    <p align="center">
                        <strong>Discapacidad</strong>
                    </p>
                    <p align="center">
                        <strong>Tipo</strong>
                    </p>
                </td>
                <td width="66" valign="top">
                    <p align="center">
                        <strong>Embarazo temprano</strong>
                    </p>
                </td>
                <td width="76" valign="top">
                    <p align="center">
                        <strong></strong>
                    </p>
                    <p align="center">
                        <strong>Parentesco</strong>
                    </p>
                </td>
                <td width="85" valign="top">
                    <p align="center">
                        <strong></strong>
                    </p>
                    <p align="center">
                        <strong>Grado de Instrucción</strong>
                    </p>
                </td>
                <td width="38" valign="top">
                    <p align="center">
                        <strong></strong>
                    </p>
                    <p align="center">
                        <strong>CNE</strong>
                    </p>
                </td>
                <td width="206" valign="top">
                    <p>
                        <strong></strong>
                    </p>
                    <p>
                        <strong>Profesión</strong>
                    </p>
                    <p align="center">
                        <strong></strong>
                    </p>
                </td>
                <td width="51" valign="top">
                    <p align="center">
                        <strong></strong>
                    </p>
                    <p align="center">
                        <strong>Pensionado</strong>
                    </p>
                </td>
                <td width="62" valign="top">
                    <p align="center">
                        <strong></strong>
                    </p>
                    <p align="center">
                        <strong>Ing. Mensual</strong>
                    </p>
                </td>
            </tr>
            <tr>
                <td width="36" valign="top">
                    <p align="center">
                         1
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%"  value="<?php echo $NombresYApellidos[2]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 80%" name="sexo1" value="<?php echo $Sexo[2]; ?>" > 
                </td>
                <td width="73" valign="center"><input style="width: 90%" value="<?php echo $Cedulas[2]; ?>" >
                </td>
                <td width="75" valign="center"><input style="width: 90%" value="<?php echo $FechaNacimiento[2]; ?>">
                </td>
                <td width="47" valign="center"><input style="width: 90%" value="<?php echo $Edad[2]; ?>">
                </td>
                <td width="95" valign="center"> <input style="width: 90%" value="<?php echo $Discapacidad[2]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Embarazotemprano[2]; ?>">
                </td>
                <td width="76" valign="center"><input style="width: 90%" value="<?php echo $Parentesco[2]; ?>">
                </td>
                <td width="85" valign="center"><input style="width: 90%" value="<?php echo $Instruccion[2]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 90%" value="<?php echo $CNE[2]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Profesion[2]; ?>">
                </td>
                <td width="31" valign="center"><input style="width: 90%" value="<?php echo $Pensionado[2]; ?>">
                </td>
                <td width="82" valign="center"><input style="width: 90%" value="<?php echo $IngresoMensual[2]; ?>">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         2
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%"  value="<?php echo $NombresYApellidos[3]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 80%" name="sexo1" value="<?php echo $Sexo[3]; ?>" > 
                </td>
                <td width="73" valign="center"><input style="width: 90%" value="<?php echo $Cedulas[3]; ?>" >
                </td>
                <td width="75" valign="center"><input style="width: 90%" value="<?php echo $FechaNacimiento[3]; ?>">
                </td>
                <td width="47" valign="center"><input style="width: 90%" value="<?php echo $Edad[3]; ?>">
                </td>
                <td width="95" valign="center"> <input style="width: 90%" value="<?php echo $Discapacidad[3]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Embarazotemprano[3]; ?>">
                </td>
                <td width="76" valign="center"><input style="width: 90%" value="<?php echo $Parentesco[3]; ?>">
                </td>
                <td width="85" valign="center"><input style="width: 90%" value="<?php echo $Instruccion[3]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 90%" value="<?php echo $CNE[3]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Profesion[3]; ?>">
                </td>
                <td width="31" valign="center"><input style="width: 90%" value="<?php echo $Pensionado[3]; ?>">
                </td>
                <td width="82" valign="center"><input style="width: 90%" value="<?php echo $IngresoMensual[3]; ?>">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         3
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%"  value="<?php echo $NombresYApellidos[4]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 80%" name="sexo1" value="<?php echo $Sexo[4]; ?>" > 
                </td>
                <td width="73" valign="center"><input style="width: 90%" value="<?php echo $Cedulas[4]; ?>" >
                </td>
                <td width="75" valign="center"><input style="width: 90%" value="<?php echo $FechaNacimiento[4]; ?>">
                </td>
                <td width="47" valign="center"><input style="width: 90%" value="<?php echo $Edad[4]; ?>">
                </td>
                <td width="95" valign="center"> <input style="width: 90%" value="<?php echo $Discapacidad[4]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Embarazotemprano[4]; ?>">
                </td>
                <td width="76" valign="center"><input style="width: 90%" value="<?php echo $Parentesco[4]; ?>">
                </td>
                <td width="85" valign="center"><input style="width: 90%" value="<?php echo $Instruccion[4]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 90%" value="<?php echo $CNE[4]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Profesion[4]; ?>">
                </td>
                <td width="31" valign="center"><input style="width: 90%" value="<?php echo $Pensionado[4]; ?>">
                </td>
                <td width="82" valign="center"><input style="width: 90%" value="<?php echo $IngresoMensual[4]; ?>">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         4
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%"  value="<?php echo $NombresYApellidos[5]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 80%" name="sexo1" value="<?php echo $Sexo[5]; ?>" > 
                </td>
                <td width="73" valign="center"><input style="width: 90%" value="<?php echo $Cedulas[5]; ?>" >
                </td>
                <td width="75" valign="center"><input style="width: 90%" value="<?php echo $FechaNacimiento[5]; ?>">
                </td>
                <td width="47" valign="center"><input style="width: 90%" value="<?php echo $Edad[5]; ?>">
                </td>
                <td width="95" valign="center"> <input style="width: 90%" value="<?php echo $Discapacidad[5]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Embarazotemprano[5]; ?>">
                </td>
                <td width="76" valign="center"><input style="width: 90%" value="<?php echo $Parentesco[5]; ?>">
                </td>
                <td width="85" valign="center"><input style="width: 90%" value="<?php echo $Instruccion[5]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 90%" value="<?php echo $CNE[5]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Profesion[5]; ?>">
                </td>
                <td width="31" valign="center"><input style="width: 90%" value="<?php echo $Pensionado[5]; ?>">
                </td>
                <td width="82" valign="center"><input style="width: 90%" value="<?php echo $IngresoMensual[5]; ?>">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         5
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%"  value="<?php echo $NombresYApellidos[6]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 80%" name="sexo1" value="<?php echo $Sexo[6]; ?>" > 
                </td>
                <td width="73" valign="center"><input style="width: 90%" value="<?php echo $Cedulas[6]; ?>" >
                </td>
                <td width="75" valign="center"><input style="width: 90%" value="<?php echo $FechaNacimiento[6]; ?>">
                </td>
                <td width="47" valign="center"><input style="width: 90%" value="<?php echo $Edad[6]; ?>">
                </td>
                <td width="95" valign="center"> <input style="width: 90%" value="<?php echo $Discapacidad[6]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Embarazotemprano[6]; ?>">
                </td>
                <td width="76" valign="center"><input style="width: 90%" value="<?php echo $Parentesco[6]; ?>">
                </td>
                <td width="85" valign="center"><input style="width: 90%" value="<?php echo $Instruccion[6]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 90%" value="<?php echo $CNE[6]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Profesion[6]; ?>">
                </td>
                <td width="31" valign="center"><input style="width: 90%" value="<?php echo $Pensionado[6]; ?>">
                </td>
                <td width="82" valign="center"><input style="width: 90%" value="<?php echo $IngresoMensual[6]; ?>">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         6
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%"  value="<?php echo $NombresYApellidos[7]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 80%" name="sexo1" value="<?php echo $Sexo[7]; ?>" > 
                </td>
                <td width="73" valign="center"><input style="width: 90%" value="<?php echo $Cedulas[7]; ?>" >
                </td>
                <td width="75" valign="center"><input style="width: 90%" value="<?php echo $FechaNacimiento[7]; ?>">
                </td>
                <td width="47" valign="center"><input style="width: 90%" value="<?php echo $Edad[7]; ?>">
                </td>
                <td width="95" valign="center"> <input style="width: 90%" value="<?php echo $Discapacidad[7]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Embarazotemprano[7]; ?>">
                </td>
                <td width="76" valign="center"><input style="width: 90%" value="<?php echo $Parentesco[7]; ?>">
                </td>
                <td width="85" valign="center"><input style="width: 90%" value="<?php echo $Instruccion[7]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 90%" value="<?php echo $CNE[7]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Profesion[7]; ?>">
                </td>
                <td width="31" valign="center"><input style="width: 90%" value="<?php echo $Pensionado[7]; ?>">
                </td>
                <td width="82" valign="center"><input style="width: 90%" value="<?php echo $IngresoMensual[7]; ?>">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         7
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%"  value="<?php echo $NombresYApellidos[8]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 80%" name="sexo1" value="<?php echo $Sexo[8]; ?>" > 
                </td>
                <td width="73" valign="center"><input style="width: 90%" value="<?php echo $Cedulas[8]; ?>" >
                </td>
                <td width="75" valign="center"><input style="width: 90%" value="<?php echo $FechaNacimiento[8]; ?>">
                </td>
                <td width="47" valign="center"><input style="width: 90%" value="<?php echo $Edad[8]; ?>">
                </td>
                <td width="95" valign="center"> <input style="width: 90%" value="<?php echo $Discapacidad[8]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Embarazotemprano[8]; ?>">
                </td>
                <td width="76" valign="center"><input style="width: 90%" value="<?php echo $Parentesco[8]; ?>">
                </td>
                <td width="85" valign="center"><input style="width: 90%" value="<?php echo $Instruccion[8]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 90%" value="<?php echo $CNE[8]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Profesion[8]; ?>">
                </td>
                <td width="31" valign="center"><input style="width: 90%" value="<?php echo $Pensionado[8]; ?>">
                </td>
                <td width="82" valign="center"><input style="width: 90%" value="<?php echo $IngresoMensual[8]; ?>">
                </td>
            </tr>
          <tr>
                <td width="36" valign="top">
                    <p align="center">
                         8
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%"  value="<?php echo $NombresYApellidos[9]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 80%" name="sexo1" value="<?php echo $Sexo[9]; ?>" > 
                </td>
                <td width="73" valign="center"><input style="width: 90%" value="<?php echo $Cedulas[9]; ?>" >
                </td>
                <td width="75" valign="center"><input style="width: 90%" value="<?php echo $FechaNacimiento[9]; ?>">
                </td>
                <td width="47" valign="center"><input style="width: 90%" value="<?php echo $Edad[9]; ?>">
                </td>
                <td width="95" valign="center"> <input style="width: 90%" value="<?php echo $Discapacidad[9]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Embarazotemprano[9]; ?>">
                </td>
                <td width="76" valign="center"><input style="width: 90%" value="<?php echo $Parentesco[9]; ?>">
                </td>
                <td width="85" valign="center"><input style="width: 90%" value="<?php echo $Instruccion[9]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 90%" value="<?php echo $CNE[9]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Profesion[9]; ?>">
                </td>
                <td width="31" valign="center"><input style="width: 90%" value="<?php echo $Pensionado[9]; ?>">
                </td>
                <td width="82" valign="center"><input style="width: 90%" value="<?php echo $IngresoMensual[9]; ?>">
                </td>
            </tr>
          <tr>
                <td width="36" valign="top">
                    <p align="center">
                         9
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%"  value="<?php echo $NombresYApellidos[10]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 80%" name="sexo1" value="<?php echo $Sexo[10]; ?>" > 
                </td>
                <td width="73" valign="center"><input style="width: 90%" value="<?php echo $Cedulas[10]; ?>" >
                </td>
                <td width="75" valign="center"><input style="width: 90%" value="<?php echo $FechaNacimiento[10]; ?>">
                </td>
                <td width="47" valign="center"><input style="width: 90%" value="<?php echo $Edad[10]; ?>">
                </td>
                <td width="95" valign="center"> <input style="width: 90%" value="<?php echo $Discapacidad[10]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Embarazotemprano[10]; ?>">
                </td>
                <td width="76" valign="center"><input style="width: 90%" value="<?php echo $Parentesco[10]; ?>">
                </td>
                <td width="85" valign="center"><input style="width: 90%" value="<?php echo $Instruccion[10]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 90%" value="<?php echo $CNE[10]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Profesion[10]; ?>">
                </td>
                <td width="31" valign="center"><input style="width: 90%" value="<?php echo $Pensionado[10]; ?>">
                </td>
                <td width="82" valign="center"><input style="width: 90%" value="<?php echo $IngresoMensual[10]; ?>">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         10
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%"  value="<?php echo $NombresYApellidos[11]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 80%" name="sexo1" value="<?php echo $Sexo[11]; ?>" > 
                </td>
                <td width="73" valign="center"><input style="width: 90%" value="<?php echo $Cedulas[11]; ?>" >
                </td>
                <td width="75" valign="center"><input style="width: 90%" value="<?php echo $FechaNacimiento[11]; ?>">
                </td>
                <td width="47" valign="center"><input style="width: 90%" value="<?php echo $Edad[11]; ?>">
                </td>
                <td width="95" valign="center"> <input style="width: 90%" value="<?php echo $Discapacidad[11]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Embarazotemprano[11]; ?>">
                </td>
                <td width="76" valign="center"><input style="width: 90%" value="<?php echo $Parentesco[11]; ?>">
                </td>
                <td width="85" valign="center"><input style="width: 90%" value="<?php echo $Instruccion[11]; ?>">
                </td>
                <td width="60" valign="center"><input style="width: 90%" value="<?php echo $CNE[11]; ?>">
                </td>
                <td width="66" valign="center"><input style="width: 90%" value="<?php echo $Profesion[11]; ?>">
                </td>
                <td width="31" valign="center"><input style="width: 90%" value="<?php echo $Pensionado[11]; ?>">
                </td>
                <td width="82" valign="center"><input style="width: 90%" value="<?php echo $IngresoMensual[11]; ?>">
                </td>
            </tr>
           <tr>
                <td width="971" colspan="14" valign="top">
                    <p>
                        <strong>Observación: </strong>
                        <strong><input width="400" style="width: 800px; height: 30px"></strong>
               
                    </p>
                </td>
            </tr>

        </tbody>
    </table>
<br clear="all"/>

   <center> <button name="boton" style="padding: 20px; font-size: 20px">Editar registro</button></center>

</form>
<?php



?>
</body>
</html>


