<?php
//abro la conexion

include("base.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellidos']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['sabor']) >= 1 &&
        strlen($_POST['forma']) >= 1 &&
        strlen($_POST['cantidad']) >= 1 &&
        strlen($_POST['caracteristicas']) >= 1 &&
        strlen($_POST['fecha_entrega']) >= 1 )

    {
	    $nombre = trim($_POST['nombre']);
	    $apellidos = trim($_POST['apellidos']);
	    $telefono = trim($_POST['telefono']);
	    $sabor = trim($_POST['sabor']);
	    $forma = trim($_POST['forma']);
	    $cantidad = trim($_POST['cantidad']);
	    $caracteristicas = trim($_POST['caracteristicas']);
	    $fecha_entrega = trim($_POST['fecha_entrega']);
	    $consulta = "INSERT INTO galletas(nombre, apellidos, telefono, sabor, forma,  cantidad, caracteristicas, fecha_entrega) 




	    VALUES ('$nombre','$apellidos','$telefono', '$sabor', '$forma', '$cantidad', '$caracteristicas','$fecha_entrega')";
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