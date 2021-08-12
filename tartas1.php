<?php
//abro la conexion

include("base.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellidos']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['base_tarta']) >= 1 &&
        strlen($_POST['relleno']) >= 1 &&
        strlen($_POST['fecha_entrega']) >= 1 &&
        strlen($_POST['cantidad']) >= 1 )

    {
	    $nombre = trim($_POST['nombre']);
	    $apellidos = trim($_POST['apellidos']);
	    $telefono = trim($_POST['telefono']);
	    $base_tarta = trim($_POST['base_tarta']);
	    $relleno = trim($_POST['relleno']);
	    $fecha_entrega = trim($_POST['fecha_entrega']);
	    $cantidad = trim($_POST['cantidad']);
	    $consulta = "INSERT INTO tartas(nombre, apellidos, telefono, base_tarta, relleno, fecha_entrega, cantidad) 




	    VALUES ('$nombre','$apellidos','$telefono', '$base_tarta', '$relleno', '$fecha_entrega', '$ cantidad')";
	    $resultado = mysqli_query($enlace,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡su registro ha sido exitoso!</h3>
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