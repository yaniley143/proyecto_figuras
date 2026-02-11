<?php
$radio = 0;
$area = 0;
$perimetro = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $radio = floatval($_POST["radio"]);

    $area = pi() * pow($radio, 2);
    $perimetro = 2 * pi() * $radio;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados del Círculo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="card">
        <h1>📐 Resultados</h1>

        <p><strong>Área:</strong> <?php echo round($area, 2); ?></p>
        <p><strong>Perímetro:</strong> <?php echo round($perimetro, 2); ?></p>

        <a href="index.html">⬅ Volver</a>
    </div>
</body>
</html>
