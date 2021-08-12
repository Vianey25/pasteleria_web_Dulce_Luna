<?php
//abro la conexion

include("base.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['apellidos']) >= 1 &&
        strlen($_POST['telefono']) >= 1 &&
        strlen($_POST['tipo_de_gelatina']) >= 1 &&
        strlen($_POST['sabores']) >= 1 &&
        strlen($_POST['decoracion']) >= 1 &&
        strlen($_POST['cantidad']) >= 1 &&
        strlen($_POST['fecha_entrega']) >= 1 )

    {
	    $nombre = trim($_POST['nombre']);
	    $apellidos = trim($_POST['apellidos']);
	    $telefono = trim($_POST['telefono']);
	    $tipo_de_gelatina = trim($_POST['tipo_de_gelatina']);
	    $sabores = trim($_POST['sabores']);
	    $decoracion = trim($_POST['decoracion']);
	    $cantidad = trim($_POST['cantidad']);
	    $fecha_entrega = trim($_POST['fecha_entrega']);
	    $consulta = "INSERT INTO gelatinas(nombre, apellidos, telefono, tipo_de_gelatina, sabores, decoracion, cantidad, fecha_entrega) 




	    VALUES ('$nombre','$apellidos','$telefono', '$tipo_de_gelatina', '$sabores', '$decoracion', '$ cantidad','$fecha_entrega')";
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