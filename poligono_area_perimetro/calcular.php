<?php
$lados = 0;
$lado = 0;
$apotema = 0;
$perimetro = 0;
$area = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lados = intval($_POST["lados"]);
    $lado = floatval($_POST["lado"]);
    $apotema = floatval($_POST["apotema"]);

    $perimetro = $lados * $lado;
    $area = ($perimetro * $apotema) / 2;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados del Polígono</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="card">
        <h1>📐 Resultados</h1>

        <p><strong>Número de lados:</strong> <?php echo $lados; ?></p>
        <p><strong>Perímetro:</strong> <?php echo $perimetro; ?></p>
        <p><strong>Área:</strong> <?php echo $area; ?></p>

        <a href="index.html">⬅ Volver</a>
    </div>
</body>
</html>
