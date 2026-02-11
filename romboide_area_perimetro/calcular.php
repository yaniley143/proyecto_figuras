<?php
$base = 0;
$altura = 0;
$lado = 0;
$area = 0;
$perimetro = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = floatval($_POST["base"]);
    $altura = floatval($_POST["altura"]);
    $lado = floatval($_POST["lado"]);

    $area = $base * $altura;
    $perimetro = 2 * ($base + $lado);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados del Romboide</title>
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
