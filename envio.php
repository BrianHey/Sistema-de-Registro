<?php

include 'conexion.php';


$NumeroApto = $_POST['NumeroApto'];
$LetraApto = $_POST['LetraApto'];
$Apartamento = $NumeroApto . "-" . $LetraApto;


$Propietario = $_POST['Propietario'];


$TelefonoCelularPropietario= $_POST['TelefonoCelularPropietario'];

$InteligenteTelefonoPropietario = $_POST['InteligenteTelefonoPropietario'];


$CorreoPropietario = $_POST['CorreoPropietario'];

$Inquilino = $_POST['Inquilino'];

$TelefonoCelularInquilino = $_POST['TelefonoCelularInquilino'];

$InteligenteTelefonoInquilino = $_POST['InteligenteTelefonoInquilino'];

$CorreoInquilino = $_POST['CorreoInquilino'];

$TelefonoFijoApartamento = $_POST['TelefonoFijoApartamento'];


$Usuario1= $_POST['Usuario1'];
$Usuario2= $_POST['Usuario2'];
$Usuario3= $_POST['Usuario3'];
$Usuario4= $_POST['Usuario4'];
$Usuario5= $_POST['Usuario5'];
$Usuario6= $_POST['Usuario6'];
$Usuario7= $_POST['Usuario7'];
$Usuario8= $_POST['Usuario8'];
$Usuario9= $_POST['Usuario9'];
$Usuario10= $_POST['Usuario10'];


if ($Usuario1 == "") {
	$Usuario1= "";
}
else{
	$Usuario1= $Usuario1 . "<hr>";
}

if ($Usuario2 == "") {
	$Usuario2= "";
}
else{
	$Usuario2= $Usuario2 . "<hr>";
}

if ($Usuario3 == "") {
	$Usuario3= "";
}
else{
	$Usuario3= $Usuario3 . "<hr>";
}

if ($Usuario4 == "") {
	$Usuario4= "";
}
else{
	$Usuario4= $Usuario4 . "<hr>";
}

if ($Usuario5 == "") {
	$Usuario5= "";
}
else{
	$Usuario5= $Usuario5 . "<hr>";
}

if ($Usuario6 == "") {
	$Usuario6= "";
}
else{
	$Usuario6= $Usuario6 . "<hr>";
}

if ($Usuario7 == "") {
	$Usuario7= "";
}
else{
	$Usuario7= $Usuario7 . "<hr>";
}

if ($Usuario8 == "") {
	$Usuario8= "";
}
else{
	$Usuario8= $Usuario8 . "<hr>";
}

if ($Usuario9 == "") {
	$Usuario9= "";
}
else{
	$Usuario9= $Usuario9 . "<hr>";
}

if ($Usuario10 == "") {
	$Usuario10= "";
}
else{
	$Usuario10= $Usuario10 . "<hr>";
}

$Usuarios =  $Usuario1 .$Usuario2 .$Usuario3.$Usuario4.$Usuario5.$Usuario6.$Usuario7.$Usuario8.$Usuario9.$Usuario10;

//$Usuarios =  $Usuario1."<hr>".$Usuario2."<hr>".$Usuario3."<hr>".$Usuario4."<hr>".$Usuario5."<hr>".$Usuario6."<hr>".$Usuario7."<hr>".$Usuario8."<hr>".$Usuario9."<hr>".$Usuario10;

$CodigoUsuario1 = $_POST['CodigoUsuario1'];
$CodigoUsuario2 = $_POST['CodigoUsuario2'];
$CodigoUsuario3 = $_POST['CodigoUsuario3'];
$CodigoUsuario4 = $_POST['CodigoUsuario4'];
$CodigoUsuario5 = $_POST['CodigoUsuario5'];
$CodigoUsuario6 = $_POST['CodigoUsuario6'];
$CodigoUsuario7 = $_POST['CodigoUsuario7'];
$CodigoUsuario8 = $_POST['CodigoUsuario8'];
$CodigoUsuario9 = $_POST['CodigoUsuario9'];
$CodigoUsuario10 = $_POST['CodigoUsuario10'];


if ($CodigoUsuario1 == "") {
	$CodigoUsuario1= "";
}
else{
	$CodigoUsuario1= $CodigoUsuario1 . "<hr>";
}

if ($CodigoUsuario2 == "") {
	$CodigoUsuario2= "";
}
else{
	$CodigoUsuario2= $CodigoUsuario2 . "<hr>";
}

if ($CodigoUsuario3 == "") {
	$CodigoUsuario3= "";
}
else{
	$CodigoUsuario3= $CodigoUsuario3 . "<hr>";
}

if ($CodigoUsuario4 == "") {
	$CodigoUsuario4= "";
}
else{
	$CodigoUsuario4= $CodigoUsuario4 . "<hr>";
}

if ($CodigoUsuario5 == "") {
	$CodigoUsuario5= "";
}
else{
	$CodigoUsuario5= $CodigoUsuario5 . "<hr>";
}

if ($CodigoUsuario6 == "") {
	$CodigoUsuario6= "";
}
else{
	$CodigoUsuario6= $CodigoUsuario6 . "<hr>";
}

if ($CodigoUsuario7 == "") {
	$CodigoUsuario7= "";
}
else{
	$CodigoUsuario7= $CodigoUsuario7 . "<hr>";
}

if ($CodigoUsuario8 == "") {
	$CodigoUsuario8= "";
}
else{
	$CodigoUsuario8= $CodigoUsuario8 . "<hr>";
}

if ($CodigoUsuario9 == "") {
	$CodigoUsuario9= "";
}
else{
	$CodigoUsuario9= $CodigoUsuario9 . "<hr>";
}

if ($CodigoUsuario10 == "") {
	$CodigoUsuario10= "";
}
else{
	$CodigoUsuario10= $CodigoUsuario10 . "<hr>";
}

$Codigos =  $CodigoUsuario1.$CodigoUsuario2.$CodigoUsuario3.$CodigoUsuario4.$CodigoUsuario5.$CodigoUsuario6.$CodigoUsuario7.$CodigoUsuario8.$CodigoUsuario9.$CodigoUsuario10;

$SerialUsuario1 = $_POST['SerialUsuario1'];
$SerialUsuario2 = $_POST['SerialUsuario2'];
$SerialUsuario3 = $_POST['SerialUsuario3'];
$SerialUsuario4 = $_POST['SerialUsuario4'];
$SerialUsuario5 = $_POST['SerialUsuario5'];
$SerialUsuario6 = $_POST['SerialUsuario6'];
$SerialUsuario7 = $_POST['SerialUsuario7'];
$SerialUsuario8 = $_POST['SerialUsuario8'];
$SerialUsuario9 = $_POST['SerialUsuario9'];
$SerialUsuario10 = $_POST['SerialUsuario10'];

if ($SerialUsuario1 == "") {
	$SerialUsuario1= "";
}
else{
	$SerialUsuario1= $SerialUsuario1 . "<hr>";
}

if ($SerialUsuario2 == "") {
	$SerialUsuario2= "";
}
else{
	$SerialUsuario2= $SerialUsuario2 . "<hr>";
}

if ($SerialUsuario3 == "") {
	$SerialUsuario3= "";
}
else{
	$SerialUsuario3= $SerialUsuario3 . "<hr>";
}

if ($SerialUsuario4 == "") {
	$SerialUsuario4= "";
}
else{
	$SerialUsuario4= $SerialUsuario4 . "<hr>";
}

if ($SerialUsuario5 == "") {
	$SerialUsuario5= "";
}
else{
	$SerialUsuario5= $SerialUsuario5 . "<hr>";
}

if ($SerialUsuario6 == "") {
	$SerialUsuario6= "";
}
else{
	$SerialUsuario6= $SerialUsuario6 . "<hr>";
}

if ($SerialUsuario7 == "") {
	$SerialUsuario7= "";
}
else{
	$SerialUsuario7= $SerialUsuario7 . "<hr>";
}

if ($SerialUsuario8 == "") {
	$SerialUsuario8= "";
}
else{
	$SerialUsuario8= $SerialUsuario8 . "<hr>";
}

if ($SerialUsuario9 == "") {
	$SerialUsuario9= "";
}
else{
	$SerialUsuario9= $SerialUsuario9 . "<hr>";
}

if ($SerialUsuario10 == "") {
	$SerialUsuario10= "";
}
else{
	$SerialUsuario10= $SerialUsuario10 . "<hr>";
}


$Seriales =  $SerialUsuario1.$SerialUsuario2.$SerialUsuario3.$SerialUsuario4.$SerialUsuario5.$SerialUsuario6.$SerialUsuario7.$SerialUsuario8.$SerialUsuario9.$SerialUsuario10;

$Observaciones = $_POST['Observaciones'];


$Marca1 = $_POST['Marca1'];
$Marca2 = $_POST['Marca2'];
$Marca3 = $_POST['Marca3'];
$Marca4 = $_POST['Marca4'];
$Marcas = $Marca1 . "<br>" .$Marca2 . "<br>" .$Marca3 . "<br>" .$Marca4;

$Modelo1 = $_POST['Modelo1'];
$Modelo2 = $_POST['Modelo2'];
$Modelo3 = $_POST['Modelo3'];
$Modelo4 = $_POST['Modelo4'];
$Modelos = $Modelo1 . "<br>" .$Modelo2 . "<br>" .$Modelo3 . "<br>" .$Modelo4;

$Placa1 = $_POST['Placa1'];
$Placa2 = $_POST['Placa2'];
$Placa3 = $_POST['Placa3'];
$Placa4 = $_POST['Placa4'];
$Placas = $Placa1 . "<br>" .$Placa2 . "<br>" .$Placa3 . "<br>" .$Placa4;

$Color1 = $_POST['Color1'];
$Color2 = $_POST['Color2'];
$Color3 = $_POST['Color3'];
$Color4 = $_POST['Color4'];
$Colores = $Color1 . "<br>" .$Color2 . "<br>" .$Color3 . "<br>" .$Color4;

$PuestoEstacionamientoNumero1 = $_POST['PuestoEstacionamientoNumero1'];
$PuestoEstacionamientoNumero2 = $_POST['PuestoEstacionamientoNumero2'];
$PuestoEstacionamientoNumero3 = $_POST['PuestoEstacionamientoNumero3'];
$PuestoEstacionamientoNumero4 = $_POST['PuestoEstacionamientoNumero4'];


$PuestoEstacionamientoLetra1 = $_POST['PuestoEstacionamientoLetra1'];
$PuestoEstacionamientoLetra2 = $_POST['PuestoEstacionamientoLetra2'];
$PuestoEstacionamientoLetra3 = $_POST['PuestoEstacionamientoLetra3'];
$PuestoEstacionamientoLetra4 = $_POST['PuestoEstacionamientoLetra4'];

$Puestos = $PuestoEstacionamientoNumero1.$PuestoEstacionamientoLetra1."<br>".$PuestoEstacionamientoNumero2.$PuestoEstacionamientoLetra2."<br>".$PuestoEstacionamientoNumero3.$PuestoEstacionamientoLetra3."<br>".$PuestoEstacionamientoNumero4.$PuestoEstacionamientoLetra4;

$sqlComprobacion = "SELECT * FROM condominio WHERE Apartamento = '$Apartamento' ";
$ConsultaComparacionApartamentos= mysql_query($sqlComprobacion);
$FilaDeComprobacion = mysql_fetch_array($ConsultaComparacionApartamentos);

if ($Apartamento == $FilaDeComprobacion[0]) {
	echo "

	<body style='background: red'> 

	<center><h1 style='font-size: 100px; margin-top:15%; background: yellow; padding: 50px;width: 70%; border-radius: 10%; box-shadow: 1px 1px 5px 3px black;'>¡Ya existe un registro para este apartamento!</h1></center>";
}
else{
			echo "
			<body style='background: lightblue'>

			<center><h1 style='font-size: 100px; margin-top:15%; background: steelblue; padding: 50px;width: 70%; border-radius: 10%; box-shadow: 1px 1px 5px 3px black;'>¡Resgistro Exitoso!</h1></center>";
	$sql = 

"
INSERT INTO `condominio`(`Apartamento`, `Propietario`, `Celular_Propietario`, `TelefonoInteligenteP`, `Correo_Propietario`, `Inquilino`, `Celular_Inquilino`, `TelefonoInteligenteI`, `Correo_Inquilino`, `TelefonoFijoApartamento`, `Usuarios`, `Codigos`, `Serial`, `Observaciones`, `Marca`, `Modelo`, `Placa`, `Color`, `PuestoEstacionamiento`) VALUES ('$Apartamento','$Propietario','$TelefonoCelularPropietario','$InteligenteTelefonoPropietario','$CorreoPropietario','$Inquilino','$TelefonoCelularInquilino','$InteligenteTelefonoInquilino','$CorreoInquilino','$TelefonoFijoApartamento','$Usuarios','$Codigos','$Seriales','$Observaciones','$Marcas','$Modelos','$Placas','$Colores','$Puestos')

";
mysql_query($sql) or die(mysql_error());

}



?>

<!--


INSERT INTO `Condominio`(`Apartamento`, `Propietario`, `Celular_Propietario`, `TelefonoInteligenteP`, `Correo_Propietario`, `Inquilino`, `Celular_Inquilino`, `TelefonoInteligenteI`, `Correo_Inquilino`, `TelefonoFijoApartamento`, `Usuarios`, `Codigos`, `Serial`, `Observaciones`, `Marca`, `Modelo`, `Placa`, `Color`, `PuestoEstacionamiento`) VALUES ('$Apartamento','$Propietario','$TelefonoCelularPropietario','$TelefonoInteligenteP','$Correo_Propietario,'$Inquilino','$TelefonoCelularInquilino','$TelefonoInteligenteI','$Correo_Inquilino','$TelefonoFijoApartamento',[value-11],[value-12],[value-13],[value-14],[value-15],[value-16],[value-17],[value-18],[value-19])



INSERT INTO `condominio`(`Apartamento`, `Propietario`, `Celular_Propietario`, `TelefonoInteligenteP`, `Correo_Propietario`, `Inquilino`, `Celular_Inquilino`, `TelefonoInteligenteI`, `Correo_Inquilino`, `TelefonoFijoApartamento`, `Usuarios`, `Codigos`, `Serial`, `Observaciones`, `Marca`, `Modelo`, `Placa`, `Color`, `PuestoEstacionamiento`) VALUES ('$Apartamento','$Propietario','$TelefonoCelularPropietario','$InteligenteTelefonoPropietario','$CorreoPropietario','$Inquilino','$TelefonoCelularInquilino','$InteligenteTelefonoInquilino','$CorreoInquilino','$TelefonoFijoApartamento','Valor11','Valor12','Valor13','Valor14','Valor15','Valor16','Valor17','Valor18','Valor19')

-->

<style type="text/css">
	
	body{
		font-size: 
	}
</style>