<?php
//abro la conexion

include("base.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellido_paterno']) >= 1 &&
        strlen($_POST['apellido_materno']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['caracteristicas']) >= 1 &&
        strlen($_POST['producto']) >= 1 &&
        strlen($_POST['medio_de_pago']) >= 1 )

    {
	    $nombre = trim($_POST['nombre']);
	    $apellido_paterno = trim($_POST['apellido_paterno']);
	    $apellido_materno = trim($_POST['apellido_materno']);
	    $telefono = trim($_POST['telefono']);
	    $caracteristicas = trim($_POST['caracteristicas']);
	    $producto = trim($_POST['producto']);
	    $medio_de_pago = trim($_POST['medio_de_pago']);
	    $consulta = "INSERT INTO pedidos1(nombre, apellido_paterno, apellido_materno, telefono, caracteristicas, producto, medio_de_pago) VALUES ('$nombre','$apellido_paterno','$apellido_materno', '$telefono', '$caracteristicas', '$producto', '$medio_de_pago')";
	    $resultado = mysqli_query($enlace,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>