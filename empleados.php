<$php
requiere "conexiondatos.php";

$objetconexion=conectarse();

$sql="select * from empleados where empidentificacion='11'";

$resultado = $objetconexion->query($sql);

//imprimir en pantalla los datos del empleado
if ($empleado = $resultado->fetch_odject())
{
	echo "<br> Nombre empleado: ".$empleado->empnombre;
	echo "<br> fecha ingreso empleado: ".$empleado->empfechaingreso;
	echo "<br> genero empleado: ".$empleado->empgenero;

}
?>