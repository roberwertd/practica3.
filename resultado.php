<?php
$cantidad = $_POST['cantidad'];
$cantidad1 = $_POST['cantidad1'];
$cantidad2 = $_POST['cantidad2'];
$descripcion = $_POST['descripcion'];
$descripcion1 = $_POST['descripcion1'];
$descripcion2 = $_POST['descripcion2'];
$unitario = $_POST['unitario'];
$unitario1 = $_POST['unitario1'];
$unitario2 = $_POST['unitario2'];
define('iva',.16);
define("sal", "<br>");
?>
<html>
    <body>
        <p>
            
            <?php
                $multiplicacion = $cantidad * $unitario;
		$multiplicacion1 = $cantidad1 * $unitario1;
		$multiplicacion2 = $cantidad2 * $unitario2;
		$suma = $multiplicacion + $multiplicacion1 + $multiplicacion2;
		
		$iva = $suma * iva;
		$total = $iva + $suma;
		
		echo "  SUS PRODUCTOS SON:","<br>";
		echo $cantidad,"Producto(s):",$descripcion,$multiplicacion.sal;
		echo $cantidad1,"Producto(s):",$descripcion1,$multiplicacion1.sal;
		echo $cantidad2,"Producto(s):",$descripcion2,$multiplicacion2.sal;
		echo "Subtotal :";
		echo $suma,"<br>";
		echo "TOTAL A PAGAR ","<br>";
                echo $total ;
            ?>
        </p>
    </body>

</html>