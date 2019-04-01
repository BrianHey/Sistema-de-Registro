<?php 

require 'conexion.php';

$query = "SELECT * FROM Datos"; 
$result =mysql_query($query);

if (!$result) {
	echo "error locoooo";
}

$row=mysql_fetch_row($result)
?> 


<!--
<table border="4"> 

<tr>
	<td>ID</td>
	<td>Nombre</td>
	<td>Contraseña</td>
	<td>Correo</td>
</tr>

<?php 
while ($row=mysql_fetch_row($result)) {

	?>

	<tr>
		<td><?php echo $row['0']; ?></td>
		<td><?php echo $row['1']; ?></td>
		<td><?php echo $row['2']; ?></td>
		<td><?php echo $row['3']; ?></td>
	</tr>
<?php 
		}

?>

</table> -->