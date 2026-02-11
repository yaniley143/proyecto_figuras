<?php
$diagonalMayor = 0;
$diagonalMenor = 0;
$lado = 0;
$area = 0;
$perimetro = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $diagonalMayor = floatval($_POST["diagonalMayor"]);
    $diagonalMenor = floatval($_POST["diagonalMenor"]);
    $lado = floatval($_POST["lado"]);

    $area = ($diagonalMayor * $diagonalMenor) / 2;
    $perimetro = 4 * $lado;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultados del Rombo</title>
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
