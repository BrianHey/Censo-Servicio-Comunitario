<?php 
    
    require 'conexion.php';

 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
<style type="text/css">
    p{
        text-align: center;
    }


</style>

<br>

<button><a href="index.php"> Volver al Menu principal </a></button><br> <br>

 <CENTER><h1>NUEVO REGISTRO</h1></CENTER>
<form action="resgistro.php" method="post">

		<!-- I. ESTUDIO DEMOGRÁFICO Y SOCIOECONÓMICO -->

   <!--  <table style="display: block; margin: auto;" border="1" cellspacing="0" cellpadding="0" width="971">
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
                        COMUNAL: ÁRBOL DE LAS TRES RAICES
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
                        ESTADO: MONAGAS
                    </p>
                </td>
                <td width="129" valign="top">
                    <p>
                        MUNICIPIO: MATURIN
                    </p>
                </td>
                <td width="129" valign="top">
                    <p>
                        PARROQUIA: SAN SIMÓN
                    </p>
                </td>
                <td width="129" valign="top">
                    <p>
                        SECTOR : NEGRO PRIMERO
                    </p>
                </td>
                <td width="211" valign="top">
                    <p>
                        NOMBRE DE LA COMUNIDAD: NEGRO PRIMERO
                    </p>
                </td>
                <td width="255" colspan="2" valign="top">
                    <p>
                        DIRECCIÓN :Sector “Negro Primero”, Comunidad Negro Primero, Parroquia San Simon, Municipio Maturín, Estado Monagas.
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
                        NOMBRES: <input style="width: 60%" name="Nombres" required>
                    </p>
                    <p>
                        APELLIDOS: <input style="width: 60%" name="Apellidos" required>
                    </p>
                </td>
                <td width="144" valign="top">
                    <p>
                        C.I. Nº: <input style="width: 60%" name="CI" required>
                    </p>
                    <p>
                        <strong>V </strong>
                        <input type="radio" name="VE" value="V"> <strong>E </strong><input type="radio" name="VE" value="E">
                    </p>
                </td>
                <td width="217" colspan="2" valign="top">
                    <p>
                        FECHA DE NACIMIENTO:<input style="width: 60%" name="FechaNacimiento" placeholder="Dia/Mes/Año">
                    </p>
                    <p>
                        EDAD: <input style="width: 60%" name="Edad"> 
                    </p>
                    <p>
                        CNE :<input type="radio" name="CNE" value="SI"> Si <input type="radio" name="CNE" value="No"> No
                    </p>
                    
                    <p>
                        TIEMPO EN LA COMUNIDAD: <input style="width: 90%" name="TiempoComunidad">
                    </p>
                </td>
                <td width="107" valign="top">
                    <p align="center" >
                        SEXO: 
                    </p>
                    <p style="text-align:left;">
                       <input type="radio" name="Sexo" value="M"> Masculino <br><input type="radio" name="Sexo" value="F"> Femenino
                    </p>
                </td>
            </tr>
            <tr>
                <td width="342" colspan="3" valign="top">
                    <p>
                        INCAPASITADO:<input type="radio" name="Incapasitado" value="Si"> Si <input type="radio" name="Incapasitado" value="No"> No <br>TIPO: <input style="width: 90%" name="Tipo">
                    </p>
                    <p>
                        PENSIONADO: <input type="radio" name="Pensionado" value="Si"> Si <input type="radio" name="Pensionado" value="No"> No <br> Institución: <input style="width: 90%" name="Institucion">
                    </p>
                </td>
                <td width="160" rowspan="2" valign="top">
                    <p>
                        ESTADO CIVIL:
                    </p>
                    <p style="text-align:left;">
                            <input type="radio" name="Estadocivil" value="soltero"> Soltero (a) <br> 
                             <input type="radio" name="Estadocivil" value="casado"> Casado (a)
                          <br>
                            <input type="radio" name="Estadocivil" value="divorciado"> Divorciado (a) <br>
                            <input type="radio" name="Estadocivil" value="viudo"> Viudo(a) 
                            <br>
                            <input type="radio" name="Estadocivil" value="concubino"> Concubino (a)
                    </p>
                </td>
                <td width="200" colspan="2" rowspan="2" valign="top">
                    <p>
                        NIVEL DE INSTRUCCIÓN: 
                    </p>
                    <p style="text-align:left;"> 
                       <input type="radio" name="Niveldeinstruccion" value="SinInstruccion">  Sin Instrucción
                           <br>
                       <input type="radio" name="Niveldeinstruccion" value="Basica">  Básica
                       <br>
                       <input type="radio" name="Niveldeinstruccion" value="Bachiller"> Bachiller
                       <br>
                       <input type="radio" name="Niveldeinstruccion" value="TecnicoMedio"> Técnico Medio
                       <br>
                       <input type="radio" name="Niveldeinstruccion" value="TecnicoSuperior"> Técnico Superior
                       <br>
                       <input type="radio" name="Niveldeinstruccion" value="Universitario">Universitario
                       <br>
                       <input type="radio" name="Niveldeinstruccion" value="PostGrado">Post Grado
                    </p>
                </td>
                <td width="162" rowspan="2" valign="top">
                    <p>
                      PROFESIÓN /OFICIO
                         <input style="width: 90%" name="Profesion/Oficio">
                    </p>
                    <p>
                        Indique a que se dedica:  <input style="width: 90%" name="AQueSeDedica">
                    </p>
                </td>
                <td width="107" rowspan="2" valign="top">
                    <p>
                        TRABAJA ACTUALMENTE
                     <input type="radio" name="TrabajaActualmente" value="Si"> Si 
                     <br>
                     <input type="radio" name="TrabajaActualmente" value="No"> No
                    </p>
                   
                </td>
            </tr>
            <tr>
                <td width="165" valign="top">
                    <p>
                        TELF. CEL. <input style="width: 90%" name="TelfCelular">
                    </p>
                    <p>
                        TELF. HAB. <input style="width: 90%" name="TelfHabitacion">
                    </p>
                </td>
                <td width="177" colspan="2" valign="top" >
                    <p>
                        TELF. OFIC. <input style="width: 90%" name="TelfOficina">
                    </p>
                    <p>
                        E-MAIL <input style="width: 90%" name="Email">
                    </p>
                </td>
            </tr>
            <tr>
                <td width="502" colspan="4" valign="top">
                    <p>
                        CLASIFICACIÓN DEL INGRESO FAMILIAR
                    </p>
                    <p style="text-align: left;">
                       
                        <input type="radio" name="IngresoFamiliar" value="Diario"> Diario
                       <br>
                       <input type="radio" name=" IngresoFamiliar" value="Semanal"> Semanal
                       <br>
                       <input type="radio" name=" IngresoFamiliar" value="Quincenal"> Quincenal
                       <br> 
                       <input type="radio" name=" IngresoFamiliar" value="Mensual"> Mensual
                       <br>
                       <input type="radio" name=" IngresoFamiliar" value="PorTrabajo Realizado"> Por Trabajo
                        Realizado
                       <br>
                    </p>
                </td>
                <td width="469" colspan="4" valign="top">
                    <p>
                        INGRESO MENSUAL Bs. <input style="width: 90%" name="IngresoMensual">
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
                <td width="57" valign="top">
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
                <td width="66" valign="top">
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
                <td width="180" valign="center"> <input style="width: 90%" name="NombresYApellidos1">
                </td>
                <td width="60" valign="center"><input type="radio" name="Sexo1" value="M"> M <input type="radio" name="Sexo1" value="F"> F
                </td>
                <td width="73" valign="center"><input style="width: 90%" name="Cedula1">
                </td>
                <td width="75" valign="center"><input style="width: 90%" name="FechaNacimiento1">
                </td>
                <td width="47" valign="center"><input style="width: 90%" name="Edad1">
                </td>
                <td width="95" valign="center"><input type="radio" name="Discapacidad1" value="M"> Si <input type="radio" name="Discapacidad1" value="F"> No <input style="width: 90%" name="TipoDiscapacidad1">
                </td>
                <td width="66" valign="center"><input type="radio" name="EmbarazoTemprano1" value="M">Si<br><input type="radio" name="EmbarazoTemprano1" value="F">No
                </td>
                <td width="76" valign="center"><input style="width: 90%" name="Parentesco1">
                </td>
                <td width="85" valign="center"><input style="width: 90%" name="GradoInstrucion1">
                </td>
                <td width="60" valign="center"><input type="radio" name="CNE1" value="M">Si<br><input type="radio" name="CNE1" value="F">No
                </td>
                <td width="66" valign="center"><input style="width: 90%" name="Profesion1">
                </td>
                <td width="31" valign="center"><input type="radio" name="Pensionado1" value="M">Si<br><input type="radio" name="Pensionado1" value="F">No
                </td>
                <td width="82" valign="center"><input style="width: 90%" name="IngresoMensual1">
                </td>
            </tr>
            <tr>
                <td width="36" valign="top">
                    <p align="center">
                         2
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%" name="NombresYApellidos2">
                </td>
                <td width="60" valign="center"><input type="radio" name="Sexo2" value="M"> M <input type="radio" name="Sexo2" value="F"> F
                </td>
                <td width="73" valign="center"><input style="width: 90%" name="Cedula2">
                </td>
                <td width="75" valign="center"><input style="width: 90%" name="FechaNacimiento2">
                </td>
                <td width="47" valign="center"><input style="width: 90%" name="Edad2">
                </td>
                <td width="95" valign="center"><input type="radio" name="Discapacidad2" value="M"> Si <input type="radio" name="Discapacidad2" value="F"> No <input style="width: 90%" name="TipoDiscapacidad2">
                </td>
                <td width="66" valign="center"><input type="radio" name="EmbarazoTemprano2" value="M">Si<br><input type="radio" name="EmbarazoTemprano2" value="F">No
                </td>
                <td width="76" valign="center"><input style="width: 90%" name="Parentesco2">
                </td>
                <td width="85" valign="center"><input style="width: 90%" name="GradoInstrucion2">
                </td>
                <td width="60" valign="center"><input type="radio" name="CNE1" value="M">Si<br><input type="radio" name="CNE2" value="F">No
                </td>
                <td width="66" valign="center"><input style="width: 90%" name="Profesion2">
                </td>
                <td width="31" valign="center"><input type="radio" name="Pensionado2" value="M">Si<br><input type="radio" name="Pensionado2" value="F">No
                </td>
                <td width="82" valign="center"><input style="width: 90%" name="IngresoMensual2">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         3
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%" name="NombresYApellidos3">
                </td>
                <td width="60" valign="center"><input type="radio" name="Sexo3" value="M"> M <input type="radio" name="Sexo3" value="F"> F
                </td>
                <td width="73" valign="center"><input style="width: 90%" name="Cedula3">
                </td>
                <td width="75" valign="center"><input style="width: 90%" name="FechaNacimiento3">
                </td>
                <td width="47" valign="center"><input style="width: 90%" name="Edad3">
                </td>
                <td width="95" valign="center"><input type="radio" name="Discapacidad3" value="M"> Si <input type="radio" name="Discapacidad3" value="F"> No <input style="width: 90%" name="TipoDiscapacidad3">
                </td>
                <td width="66" valign="center"><input type="radio" name="EmbarazoTemprano3" value="M">Si<br><input type="radio" name="EmbarazoTemprano3" value="F">No
                </td>
                <td width="76" valign="center"><input style="width: 90%" name="Parentesco3">
                </td>
                <td width="85" valign="center"><input style="width: 90%" name="GradoInstrucion3">
                </td>
                <td width="60" valign="center"><input type="radio" name="CNE3" value="M">Si<br><input type="radio" name="CNE3" value="F">No
                </td>
                <td width="66" valign="center"><input style="width: 90%" name="Profesion3">
                </td>
                <td width="31" valign="center"><input type="radio" name="Pensionado3" value="M">Si<br><input type="radio" name="Pensionado3" value="F">No
                </td>
                <td width="82" valign="center"><input style="width: 90%" name="IngresoMensual3">
                </td>
            </tr>
            <tr>
                <td width="36" valign="top">
                    <p align="center">
                         4
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%" name="NombresYApellidos4">
                </td>
                <td width="60" valign="center"><input type="radio" name="Sexo4" value="M"> M <input type="radio" name="Sexo4" value="F"> F
                </td>
                <td width="73" valign="center"><input style="width: 90%" name="Cedula4">
                </td>
                <td width="75" valign="center"><input style="width: 90%" name="FechaNacimiento4">
                </td>
                <td width="47" valign="center"><input style="width: 90%" name="Edad4">
                </td>
                <td width="95" valign="center"><input type="radio" name="Discapacidad4" value="M"> Si <input type="radio" name="Discapacidad4" value="F"> No <input style="width: 90%" name="TipoDiscapacidad4">
                </td>
                <td width="66" valign="center"><input type="radio" name="EmbarazoTemprano4" value="M">Si<br><input type="radio" name="EmbarazoTemprano4" value="F">No
                </td>
                <td width="76" valign="center"><input style="width: 90%" name="Parentesco4">
                </td>
                <td width="85" valign="center"><input style="width: 90%" name="GradoInstrucion4">
                </td>
                <td width="60" valign="center"><input type="radio" name="CNE4" value="M">Si<br><input type="radio" name="CNE4" value="F">No
                </td>
                <td width="66" valign="center"><input style="width: 90%" name="Profesion4">
                </td>
                <td width="31" valign="center"><input type="radio" name="Pensionado4" value="M">Si<br><input type="radio" name="Pensionado4" value="F">No
                </td>
                <td width="82" valign="center"><input style="width: 90%" name="IngresoMensual4">
                </td>
            </tr>
            <tr>
                <td width="36" valign="top">
                    <p align="center">
                         5
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%" name="NombresYApellidos5">
                </td>
                <td width="60" valign="center"><input type="radio" name="Sexo5" value="M"> M <input type="radio" name="Sexo5" value="F"> F
                </td>
                <td width="73" valign="center"><input style="width: 90%" name="Cedula5">
                </td>
                <td width="75" valign="center"><input style="width: 90%" name="FechaNacimiento5">
                </td>
                <td width="47" valign="center"><input style="width: 90%" name="Edad5">
                </td>
                <td width="95" valign="center"><input type="radio" name="Discapacidad5" value="M"> Si <input type="radio" name="Discapacidad5" value="F"> No <input style="width: 90%" name="TipoDiscapacidad5">
                </td>
                <td width="66" valign="center"><input type="radio" name="EmbarazoTemprano5" value="M">Si<br><input type="radio" name="EmbarazoTemprano5" value="F">No
                </td>
                <td width="76" valign="center"><input style="width: 90%" name="Parentesco5">
                </td>
                <td width="85" valign="center"><input style="width: 90%" name="GradoInstrucion5">
                </td>
                <td width="60" valign="center"><input type="radio" name="CNE5" value="M">Si<br><input type="radio" name="CNE5" value="F">No
                </td>
                <td width="66" valign="center"><input style="width: 90%" name="Profesion5">
                </td>
                <td width="31" valign="center"><input type="radio" name="Pensionado5" value="M">Si<br><input type="radio" name="Pensionado5" value="F">No
                </td>
                <td width="82" valign="center"><input style="width: 90%" name="IngresoMensual5">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         6
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%" name="NombresYApellidos6">
                </td>
                <td width="60" valign="center"><input type="radio" name="Sexo6" value="M"> M <input type="radio" name="Sexo6" value="F"> F
                </td>
                <td width="73" valign="center"><input style="width: 90%" name="Cedula6">
                </td>
                <td width="75" valign="center"><input style="width: 90%" name="FechaNacimiento6">
                </td>
                <td width="47" valign="center"><input style="width: 90%" name="Edad6">
                </td>
                <td width="95" valign="center"><input type="radio" name="Discapacidad6" value="M"> Si <input type="radio" name="Discapacidad6" value="F"> No <input style="width: 90%" name="TipoDiscapacidad6">
                </td>
                <td width="66" valign="center"><input type="radio" name="EmbarazoTemprano6" value="M">Si<br><input type="radio" name="EmbarazoTemprano6" value="F">No
                </td>
                <td width="76" valign="center"><input style="width: 90%" name="Parentesco6">
                </td>
                <td width="85" valign="center"><input style="width: 90%" name="GradoInstrucion6">
                </td>
                <td width="60" valign="center"><input type="radio" name="CNE6" value="M">Si<br><input type="radio" name="CNE6" value="F">No
                </td>
                <td width="66" valign="center"><input style="width: 90%" name="Profesion6">
                </td>
                <td width="31" valign="center"><input type="radio" name="Pensionado6" value="M">Si<br><input type="radio" name="Pensionado6" value="F">No
                </td>
                <td width="82" valign="center"><input style="width: 90%" name="IngresoMensual6">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         7
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%" name="NombresYApellidos7">
                </td>
                <td width="60" valign="center"><input type="radio" name="Sexo7" value="M"> M <input type="radio" name="Sexo7" value="F"> F
                </td>
                <td width="73" valign="center"><input style="width: 90%" name="Cedula7">
                </td>
                <td width="75" valign="center"><input style="width: 90%" name="FechaNacimiento7">
                </td>
                <td width="47" valign="center"><input style="width: 90%" name="Edad7">
                </td>
                <td width="95" valign="center"><input type="radio" name="Discapacidad7" value="M"> Si <input type="radio" name="Discapacidad7" value="F"> No <input style="width: 90%" name="TipoDiscapacidad7">
                </td>
                <td width="66" valign="center"><input type="radio" name="EmbarazoTemprano7" value="M">Si<br><input type="radio" name="EmbarazoTemprano7" value="F">No
                </td>
                <td width="76" valign="center"><input style="width: 90%" name="Parentesco7">
                </td>
                <td width="85" valign="center"><input style="width: 90%" name="GradoInstrucion7">
                </td>
                <td width="60" valign="center"><input type="radio" name="CNE7" value="M">Si<br><input type="radio" name="CNE7" value="F">No
                </td>
                <td width="66" valign="center"><input style="width: 90%" name="Profesion7">
                </td>
                <td width="31" valign="center"><input type="radio" name="Pensionado7" value="M">Si<br><input type="radio" name="Pensionado7" value="F">No
                </td>
                <td width="82" valign="center"><input style="width: 90%" name="IngresoMensual7">
                </td>
            </tr>
            <tr>
                <td width="36" valign="top">
                    <p align="center">
                         8
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%" name="NombresYApellidos8">
                </td>
                <td width="60" valign="center"><input type="radio" name="Sexo8" value="M"> M <input type="radio" name="Sexo8" value="F"> F
                </td>
                <td width="73" valign="center"><input style="width: 90%" name="Cedula8">
                </td>
                <td width="75" valign="center"><input style="width: 90%" name="FechaNacimiento8">
                </td>
                <td width="47" valign="center"><input style="width: 90%" name="Edad8">
                </td>
                <td width="95" valign="center"><input type="radio" name="Discapacidad8" value="M"> Si <input type="radio" name="Discapacidad8" value="F"> No <input style="width: 90%" name="TipoDiscapacidad8">
                </td>
                <td width="66" valign="center"><input type="radio" name="EmbarazoTemprano8" value="M">Si<br><input type="radio" name="EmbarazoTemprano8" value="F">No
                </td>
                <td width="76" valign="center"><input style="width: 90%" name="Parentesco8">
                </td>
                <td width="85" valign="center"><input style="width: 90%" name="GradoInstrucion8">
                </td>
                <td width="60" valign="center"><input type="radio" name="CNE8" value="M">Si<br><input type="radio" name="CNE8" value="F">No
                </td>
                <td width="66" valign="center"><input style="width: 90%" name="Profesion8">
                </td>
                <td width="31" valign="center"><input type="radio" name="Pensionado8" value="M">Si<br><input type="radio" name="Pensionado8" value="F">No
                </td>
                <td width="82" valign="center"><input style="width: 90%" name="IngresoMensual8">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         9
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%" name="NombresYApellidos9">
                </td>
                <td width="60" valign="center"><input type="radio" name="Sexo9" value="M"> M <input type="radio" name="Sexo9" value="F"> F
                </td>
                <td width="73" valign="center"><input style="width: 90%" name="Cedula9">
                </td>
                <td width="75" valign="center"><input style="width: 90%" name="FechaNacimiento9">
                </td>
                <td width="47" valign="center"><input style="width: 90%" name="Edad9">
                </td>
                <td width="95" valign="center"><input type="radio" name="Discapacidad9" value="M"> Si <input type="radio" name="Discapacidad9" value="F"> No <input style="width: 90%" name="TipoDiscapacidad9">
                </td>
                <td width="66" valign="center"><input type="radio" name="EmbarazoTemprano9" value="M">Si<br><input type="radio" name="EmbarazoTemprano9" value="F">No
                </td>
                <td width="76" valign="center"><input style="width: 90%" name="Parentesco9">
                </td>
                <td width="85" valign="center"><input style="width: 90%" name="GradoInstrucion9">
                </td>
                <td width="60" valign="center"><input type="radio" name="CNE9" value="M">Si<br><input type="radio" name="CNE9" value="F">No
                </td>
                <td width="66" valign="center"><input style="width: 90%" name="Profesion9">
                </td>
                <td width="31" valign="center"><input type="radio" name="Pensionado9" value="M">Si<br><input type="radio" name="Pensionado9" value="F">No
                </td>
                <td width="82" valign="center"><input style="width: 90%" name="IngresoMensual9">
                </td>
            </tr>
           <tr>
                <td width="36" valign="top">
                    <p align="center">
                         10
                    </p>
                </td>
                <td width="180" valign="center"> <input style="width: 90%" name="NombresYApellidos10">
                </td>
                <td width="60" valign="center"><input type="radio" name="Sexo10" value="M"> M <input type="radio" name="Sexo10" value="F"> F
                </td>
                <td width="73" valign="center"><input style="width: 90%" name="Cedula10">
                </td>
                <td width="75" valign="center"><input style="width: 90%" name="FechaNacimiento10">
                </td>
                <td width="47" valign="center"><input style="width: 90%" name="Edad10">
                </td>
                <td width="95" valign="center"><input type="radio" name="Discapacidad10" value="M"> Si <input type="radio" name="Discapacidad10" value="F"> No <input style="width: 90%" name="TipoDiscapacidad10">
                </td>
                <td width="66" valign="center"><input type="radio" name="EmbarazoTemprano10" value="M">Si<br><input type="radio" name="EmbarazoTemprano10" value="F">No
                </td>
                <td width="76" valign="center"><input style="width: 90%" name="Parentesco10">
                </td>
                <td width="85" valign="center"><input style="width: 90%" name="GradoInstrucion10">
                </td>
                <td width="60" valign="center"><input type="radio" name="CNE10" value="M">Si<br><input type="radio" name="CNE10" value="F">No
                </td>
                <td width="66" valign="center"><input style="width: 90%" name="Profesion10">
                </td>
                <td width="31" valign="center"><input type="radio" name="Pensionado10" value="M">Si<br><input type="radio" name="Pensionado10" value="F">No
                </td>
                <td width="82" valign="center"><input style="width: 90%" name="IngresoMensual10">
                </td>
            </tr>
           <tr>
                <td width="971" colspan="14" valign="top">
                    <p>
                        <strong>Observación: </strong>
                        <strong><input width="400" style="width: 800px; height: 30px" name="Observacion1"></strong>
               
                    </p>
                </td>
            </tr>

        </tbody>
    </table>
<br clear="all"/>

  <center>  <button name="boton" style="padding: 20px; font-size: 20px">Registrar</button> </center>

</form>
<br> <br> <br>
</body>
</html>

