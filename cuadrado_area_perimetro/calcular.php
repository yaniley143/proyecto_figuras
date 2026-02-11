<?php
$lado = null;
$area = null;
$perimetro = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lado = floatval($_POST["lado"]);
    $area = $lado * $lado;
    $perimetro = 4 * $lado;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Cuadrado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="card">
        <h1>📐 Resultados</h1>
        <div class="resultado">
            <p><strong>Lado:</strong> <?php echo $lado; ?></p>
            <p><strong>Área:</strong> <?php echo $area; ?></p>
            <p><strong>Perímetro:</strong> <?php echo $perimetro; ?></p>
        </div>
        <br>
        <a href="index.html">⬅ Volver</a>
    </div>
</body>
</html>
