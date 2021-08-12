<?php
//abro la conexion

include("base.php");

if (isset($_POST['enviar'])) {
    if (strlen($_POST['nombre']) >= 1 &&
        strlen($_POST['Apellidos']) >= 1 &&
        strlen($_POST['Producto']) >= 1 &&
        strlen($_POST['Sabor']) >= 1 &&
        strlen($_POST['Relleno']) >= 1 &&
        strlen($_POST['Dibujo_o_decoracion']) >= 1 &&
        strlen($_POST['fecha_entrega']) >= 1 &&
        strlen($_POST['cantidad']) >= 1 &&
        strlen($_POST['Kilos']) >= 1 )

    {
	    $nombre = trim($_POST['nombre']);
	    $Apellidos = trim($_POST['Apellidos']);
	    $Producto = trim($_POST['Producto']);
	    $Sabor = trim($_POST['Sabor']);
	    $Relleno = trim($_POST['Relleno']);
	    $Dibujo_o_decoracion = trim($_POST['Dibujo_o_decoracion']);
	    $fecha_entrega = trim($_POST['fecha_entrega']);
	    $cantidad = trim($_POST['cantidad']);
	    $Kilos = trim($_POST['Kilos']);
	    $consulta = "INSERT INTO pasteles(nombre, Apellidos, Producto, Sabor, Relleno, Dibujo_o_decoracion, fecha_entrega, cantidad, Kilos) 




	    VALUES ('$nombre','$Apellidos','$Producto', '$Sabor', '$Relleno', '$Dibujo_o_decoracion', '$fecha_entrega', '$ cantidad', '$Kilos')";
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

?>