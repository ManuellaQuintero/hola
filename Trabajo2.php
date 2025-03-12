<html>
<head></head>
<body>
 <?php
 $dia = date("d");
 if ($dia <= 30) {
 echo "Puede pagar ";
 } else {
 echo "Factura vencida";
 }
 ?>
</body>
</html>