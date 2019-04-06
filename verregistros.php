<style type="text/css">
	
		table{
			margin: auto;
			color: darkblue;
		}

		td{
			padding: 10px;
			font-size: 30px;
		}

		h1{
			text-align: center;
		}

		body{
		background: lightblue;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		font-size: 50px;
		}
</style>

 <button><a href="index.php"> Volver al Menu principal </a></button>


<?php 
	require 'conexion.php';

	$consulta = mysql_query("SELECT * FROM `jefefamilia`");
	
	?>

	<table border="1">

		<h1>REGISTROS</h1>

		<tr>
			<td>Número</td>
			<td>Cédulas</td>
			<td>Nombres</td>
			<td>Apellidos</td>
			<td>Teléfono</td>
		</tr>	
	
	<?php
		$contador=1;
	while ($Datos = mysql_fetch_array($consulta)) {
		 

		?>
		<tr>
				<td><?php echo $contador; ?></td>
				<td><?php echo $Datos[3]; ?></td>
				<td><?php echo $Datos[1]; ?></td>
				<td><?php echo $Datos[2]; ?></td>
				<td><?php echo $Datos[14]; ?></td>
		</tr>
	
			
<?php
			$contador = $contador + 1;
		}

?>
		</ul>
		</table>

	


	<?php

 ?>