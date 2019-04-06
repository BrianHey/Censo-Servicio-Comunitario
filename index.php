<?php 

require 'conexion.php';



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 <style type="text/css">
 	
 	body{
 		background: lightblue;
 		color: white;
 		text-shadow: 1px 1px 10px black;
 	}

 	td{
 		padding: 50px;
 		text-align: center;
 		font-size:  20px;
 	}


 </style>
<center><h1>¿Que desea hacer?</h1></center>

<table border="2" style="width: 80%; margin: auto;">
        <tr>
            <td>
                    <form action="registrar.php" method="post">
                        <p style="text-align: center;"> Agregar registro</p>
                             <button>Iniciar Registro</button></p>
                    </form>
             </td>
             <td>
                    <form action="verregistros.php" method="post">
                        <p> Ver todos los registros : 
                             <button>Ver registros</button>
                    </form>
             </td>
             <td>
                     <form action="reporte.php" method="post">
                        <p> Buscar por Cédula  : <input name="Cedula">
                             <button>Buscar</button>
                    </form>
             </td>
              
              <td>
                     <form action="eliminar.php" method="post">
                         Eliminar por cédula : <input name="Cedula" name="cedula">
                             <button>Eliminar</button>
                    </form>
             </td>

        </tr>

</table>




 </body>
 </html>