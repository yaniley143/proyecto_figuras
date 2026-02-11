<?php
$base = null;
$altura = null;
$area = null;
$perimetro = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = floatval($_POST["base"]);
    $altura = floatval($_POST["altura"]);
    $area = $base * $altura;
    $perimetro = 2 * ($base + $altura);
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del Rectángulo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="card">
        <h1>📐 Resultados</h1>
        <div class="resultado">
            <p><strong>Base:</strong> <?php echo $base; ?></p>
            <p><strong>Altura:</strong> <?php echo $altura; ?></p>
            <p><strong>Área:</strong> <?php echo $area; ?></p>
            <p><strong>Perímetro:</strong> <?php echo $perimetro; ?></p>
        </div>
        <br>
        <a href="index.html">⬅ Volver</a>
    </div>
</body>
</html>
