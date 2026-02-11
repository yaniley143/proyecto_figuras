<?php
$baseMayor = 0;
$baseMenor = 0;
$altura = 0;
$lado1 = 0;
$lado2 = 0;
$area = 0;
$perimetro = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baseMayor = floatval($_POST["baseMayor"]);
    $baseMenor = floatval($_POST["baseMenor"]);
    $altura = floatval($_POST["altura"]);
    $lado1 = floatval($_POST["lado1"]);
    $lado2 = floatval($_POST["lado2"]);

    $area = (($baseMayor + $baseMenor) * $altura) / 2;
    $perimetro = $baseMayor + $baseMenor + $lado1 + $lado2;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados del Trapecio</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="card">
        <h1>📐 Resultados</h1>

        <p><strong>Área:</strong> <?php echo $area; ?></p>
        <p><strong>Perímetro:</strong> <?php echo $perimetro; ?></p>

        <a href="index.html">⬅ Volver</a>
    </div>
</body>
</html>
