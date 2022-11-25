<?php
	$host='localhost';
	$usuario='root';
	$clave='root';
	$base='sensor';
	//$port = 3306;
	//$link=mysqli_connect("$host:$port",$usuario,$clave);
	$link=mysqli_connect($host,$usuario,$clave);
	$baseSql=mysqli_select_db($link,$base);
	$temperatura=$_GET['t'];
	$humedad=$_GET['h'];
	echo "la temperatura es: ".$temperatura."<br>la humedad es: ".$humedad;
	$fecha=time();
	$comando="INSERT INTO datos(fecha,temperatura,humedad) VALUES (".$fecha.",".$temperatura.",".$humedad.")";
	$comandoSql=mysqli_query($link,$comando);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<meta http-equiv='X-UA-Compatible' content='IE=edge'>
		<title>Datos del horno</title>
	</head>
	<body>
		<p>Test</p>

		<table>
			<tr>
				<th>Fecha</th>
				<th>Temperatura</th>
				<th>Humedad</th>
			</tr>
			<?php
				$query = 'SELECT * FROM datos';
				$resultado = mysqli_query($link, $query);
				
				while($fila = mysqli_fetch_array($resultado)){
					$fecha = $fila['fecha'];
					$temperatura = $fila['temperatura'];
					$humedad = $fila['humedad'];

					echo '<tr>
							<td>'.$fecha.'</td>
							<td>'.$temperatura.'</td>
							<td>'.$humedad.'</td>
							</tr>';
				}

				mysqli_close($link);
			?>
		</table>
	</body>
</html>