<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Tablas de Multiplicar</title>
</head>
<body>
	<?php
		if(isset($_POST['send']))
		{
			$num=$_POST['since'];
			$limit=$_POST['limit'];
			
			
			for($i=1;$i<=$num;$i++)
			{
				echo '<table border="2px" style="text-align:center">';
				echo '<th colspan="2">Tabla de Multiplicar</th>';
				
				for($j=1;$j<=$limit;$j++)
				{
					echo '<tr>';
					echo '<td>'.$i.' * '.$j.'</td>';
					echo '<td>'.$i*$j.'</td>';
					echo '</tr>';
				}
				echo '</table><br>';
			}
		}
		else
		{
			header("Location:index.html");
			echo '<script language="javascript">
			alert("Error....Debes de Ingresar al Index");
			</script>';
		}
	?>
</body>
</html>