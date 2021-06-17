<?php
$escribir = false;
$crear_primero = false;
$crear_segundo = false;
$crear_tercero = false;
$crear_cuarto = false;
$crear_quinto = false;
$crear_sexto = false;
$crear_septimo = false;
$crear_octavo = false;
$crear_noveno = false;
$crear_decimo = false;
$primero = 0;
$num1 = fopen("posicionamiento/num1.txt", "a+");
$number1 = intval(fgets($num1));
$pos1 = fopen("posicionamiento/pos1.txt", "a+");

$num2 = fopen("posicionamiento/num2.txt", "a+");
$number2 = intval(fgets($num2));
$pos2 = fopen("posicionamiento/pos2.txt", "a+");

$num3 = fopen("posicionamiento/num3.txt", "a+");
$number3 = intval(fgets($num3));
$pos3 = fopen("posicionamiento/pos3.txt", "a+");

$num4 = fopen("posicionamiento/num4.txt", "a+");
$number4 = intval(fgets($num4));
$pos4 = fopen("posicionamiento/pos4.txt", "a+");

$num5 = fopen("posicionamiento/num5.txt", "a+");
$number5 = intval(fgets($num5));
$pos5 = fopen("posicionamiento/pos5.txt", "a+");

$num6 = fopen("posicionamiento/num6.txt", "a+");
$number6 = intval(fgets($num6));
$pos6 = fopen("posicionamiento/pos6.txt", "a+");

$num7 = fopen("posicionamiento/num7.txt", "a+");
$number7 = intval(fgets($num7));
$pos7 = fopen("posicionamiento/pos7.txt", "a+");

$num8 = fopen("posicionamiento/num8.txt", "a+");
$number8 = intval(fgets($num8));
$pos8 = fopen("posicionamiento/pos8.txt", "a+");

$num9 = fopen("posicionamiento/num9.txt", "a+");
$number9 = intval(fgets($num9));
$pos9 = fopen("posicionamiento/pos9.txt", "a+");

$num10 = fopen("posicionamiento/num10.txt", "a+");
$number10 = intval(fgets($num10));
$pos10 = fopen("posicionamiento/pos10.txt", "a+");


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificaciones</title>
    <link rel="stylesheet" href="./clasificaciones.css">
</head>
<body>
    <h1>Clasificaciones</h1>
    <div id="clasificaciones">
        <ol>
            <li><?php echo fgets($pos1)?></li>
            <li><?php echo fgets($pos2)?></li>
            <li><?php echo fgets($pos3)?></li>
            <li><?php echo fgets($pos4)?></li>
            <li><?php echo fgets($pos5)?></li>
            <li><?php echo fgets($pos6)?></li>
            <li><?php echo fgets($pos7)?></li>
            <li><?php echo fgets($pos8)?></li>
            <li><?php echo fgets($pos9)?></li>
            <li><?php echo fgets($pos10)?></li>
        </ol>
    </div>
    <h3><a href="./index.html"> Volver a jugar</a></h3>
    <script src="./clasificaciones.js"></script>
</body>
</html>