    <?php
     $cantidad1 = $_GET['cantidad1'];
     $descripcion1 = $_GET['descripcion1'];
     $precio_unitario1 = $_GET['precio_unitario1'];

     $cantidad2 = $_GET['cantidad2'];
     $descripcion2 = $_GET['descripcion2'];
     $precio_unitario2 = $_GET['precio_unitario2'];


     $cantidad3 = $_GET['cantidad3'];
     $descripcion3 = $_GET['descripcion3'];
     $precio_unitario3 = $_GET['precio_unitario3'];


	$suma = $cantidad1 * $precio_unitario1;
	$suma1 = $cantidad2 * $precio_unitario2;
	$suma2 = $cantidad3 * $precio_unitario3;

	$subtotal = $suma + $suma1 + $suma2;

	define ('IVA', 0.16);
	 $IVA = $subtotal * IVA;
	$total = $subtotal + $IVA;

	
     ?>
<html>
  <body> 
     <fieldset>
	<table>
    <tr>
     <td>
    	<?php echo $cantidad1;?>
     </td>
    <td>
	<?php echo $descripcion1;?>
     </td>
     <td>
	<?php echo $suma;?>
     </td>
   </tr>

   <tr>
     <td>
    	<?php echo $cantidad2;?>
     </td>
    <td>
	<?php echo $descripcion2;?>
     </td>
     <td>
	<?php echo $suma1;?>
     </td>
   </tr>
   <tr>
     <td>
    	<?php echo $cantidad3;?>
     </td>
    <td>
	<?php echo $descripcion3;?>
     </td>
     <td>
	<?php echo $suma2;?>
     </td>
   </tr>
	
	
	</table>
<tr>
	<?php echo "subtotal $subtotal";?>
	<?php echo'<br>';?>
	</tr>

	<tr>
	<?php echo "IVA $IVA";?>
	<?php echo'<br>';?>
	</tr>

	<tr>
	<?php echo "total $total";?>
	<?php echo'<br>';?>
	</tr>
     </fieldset>
  </body>
</html>