<!DOCTYPE HTML>
<HTML>
<HEAD>
   <meta charset="utf-8">
   <link href="stylo.css" rel="stylesheet" type="text/css">

        <h1> Formulario de pedidos</h1>
		<form action="pedidos1.php"  method="POST">
	     <input type="text" name="nombre"  placeholder="nombre"><br><br>
		<input type="text" name="apellido_paterno" placeholder="Apellido paterno">
		<br><br>
        <input type="text" name="apellido_materno" placeholder="Apellido materno"><br><br>
		
		<input type="text" name="telefono" placeholder="Telefono"> <br><br>

        <input type="text" name="caracteristicas" placeholder="Caracteristicas especificas">
	    <br><br>
		<input type="text" name="producto" placeholder="Producto"><br><br>

		<input type="text" name="medio_de_pago" placeholder="Medio de cotizacion">
        <br><br>
        <input type="submit" name="enviar">
        </form>

        <?php
        include("pedidos1.php");
        ?>

</main>
</html>
