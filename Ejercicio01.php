<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Sueldo</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form method="post" action="">
        <label for="importeTotalVendido">Importe total de ventas del Mes (S/.):</label>
        <input type="text" name="importeTotalVendido" id="importeTotalVendido"><br>
        
        <label for="cantidadHijosEscolar">Cantidad de Hijos en Edad Escolar:</label>
        <input type="text" name="cantidadHijosEscolar" id="cantidadHijosEscolar"><br>
        
        <input type="submit" name="calcular" value="Calcular Sueldo">
    </form>

    <?php
    if(isset($_POST['calcular'])){
        
        $importeTotalVendido = floatval($_POST['importeTotalVendido']);
        $cantidadHijosEscolar = intval($_POST['cantidadHijosEscolar']);

     
        $sueldoBasico = 600;
        $bonificacionPorHijo = 50;
        $porcentajeComision = 7.5;
        $porcentajeDescuento = 11;

      
        $bonificacion = $cantidadHijosEscolar * $bonificacionPorHijo;
        $comision = ($importeTotalVendido * $porcentajeComision) / 100;
        $sueldoBruto = $sueldoBasico + $comision + $bonificacion;
        $descuento = ($sueldoBruto * $porcentajeDescuento) / 100;
        $sueldoNeto = $sueldoBruto - $descuento;

        echo "<h3>********Resultados:********</h3>";
        echo "Bonificación del escolar: S/. $bonificacion<br>";
        echo "Comisión por ventas: S/. $comision<br>";
        echo "Sueldo Bruto: S/. $sueldoBruto<br>";
        echo "Descuento: S/. $descuento<br>";
        echo "Sueldo Neto: S/. $sueldoNeto<br>";
    }
    ?>
</body>
</html>