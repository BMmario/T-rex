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



if(isset($_POST['puntos'])  && isset($_POST['tiempo']) ){
    echo "<h1>Datos de la partida</h1>";
    echo "<h2> Nombre: ".$_POST['nombre']."</h2>";
    echo "<h4>Puntos: ".$_POST['puntos']."</h4>";
    echo "Tiempo: ".$_POST['tiempo']." segundos";
}else{
    echo "no se ha recibido nada";
}

if(file_exists("posicionamiento/personal.txt")){
    
    
    
}else{
    $escribir = true;
    $personal = fopen("posicionamiento/personal.txt", "a+");
}

if($escribir == true){
    
    fwrite($personal, "Nombre: ".$_POST['nombre']);
    
    fwrite($personal, "
    Telefono: ".$_POST['telefono']);

    fwrite($personal, "
    Puntos: ".$_POST['puntos']);

    fwrite($personal, "
    Tiempo: ".$_POST['tiempo']);

    $escribir = false;
}
if($_POST['puntos'] > $number1){
    copy('posicionamiento/num1.txt', 'posicionamiento/num2.txt');
    copy('posicionamiento/pos1.txt', 'posicionamiento/pos2.txt');

    fclose($num1);
    unlink("posicionamiento/num1.txt");
    fclose($pos1);
    unlink("posicionamiento/pos1.txt");
    
    $crear_primero = true;    
}

if($_POST['puntos'] < $number1 && $_POST['puntos'] >$number2){
    copy('posicionamiento/num2.txt', 'posicionamiento/num3.txt');
    copy('posicionamiento/pos2.txt', 'posicionamiento/pos3.txt');
    fclose($num2); 
    unlink("posicionamiento/num2.txt");
    fclose($pos2);
    unlink("posicionamiento/pos2.txt");
    $crear_segundo = true;    
}

if($_POST['puntos'] < $number2 && $_POST['puntos'] >$number3){
    copy('posicionamiento/num3.txt', 'posicionamiento/num4.txt');
    copy('posicionamiento/pos3.txt', 'posicionamiento/pos4.txt');
    fclose($num3); 
    unlink("posicionamiento/num3.txt");
    fclose($pos3);
    unlink("posicionamiento/pos3.txt");
    $crear_tercero = true;    
}

if($_POST['puntos'] < $number3 && $_POST['puntos'] >$number4){
    copy('posicionamiento/num4.txt', 'posicionamiento/num5.txt');
    copy('posicionamiento/pos4.txt', 'posicionamiento/pos5.txt');
    fclose($num4); 
    unlink("posicionamiento/num4.txt");
    fclose($pos4);
    unlink("posicionamiento/pos4.txt");
    $crear_cuarto = true;    
}

if($_POST['puntos'] < $number4 && $_POST['puntos'] >$number5){
    copy('posicionamiento/num5.txt', 'posicionamiento/num6.txt');
    copy('posicionamiento/pos5.txt', 'posicionamiento/pos6.txt');
    fclose($num5); 
    unlink("posicionamiento/num5.txt");
    fclose($pos5);
    unlink("posicionamiento/pos5.txt");
    $crear_quinto = true;    
}

if($_POST['puntos'] < $number5 && $_POST['puntos'] >$number6){
    copy('posicionamiento/num6.txt', 'posicionamiento/num7.txt');
    copy('posicionamiento/pos6.txt', 'posicionamiento/pos7.txt');
    fclose($num6); 
    unlink("posicionamiento/num6.txt");
    fclose($pos6);
    unlink("posicionamiento/pos6.txt");
    $crear_sexto = true;    
}

if($_POST['puntos'] < $number6 && $_POST['puntos'] >$number7){
    copy('posicionamiento/num7.txt', 'posicionamiento/num8.txt');
    copy('posicionamiento/pos7.txt', 'posicionamiento/pos8.txt');
    fclose($num7); 
    unlink("posicionamiento/num7.txt");
    fclose($pos7);
    unlink("posicionamiento/pos7.txt");
    $crear_septimo = true;    
}

if($_POST['puntos'] < $number7 && $_POST['puntos'] >$number8){
    copy('posicionamiento/num8.txt', 'posicionamiento/num9.txt');
    copy('posicionamiento/pos8.txt', 'posicionamiento/pos9.txt');
    fclose($num8); 
    unlink("posicionamiento/num8.txt");
    fclose($pos8);
    unlink("posicionamiento/pos8.txt");
    $crear_octavo = true;    
}

if($_POST['puntos'] < $number8 && $_POST['puntos'] >$number9){
    copy('posicionamiento/num9.txt', 'posicionamiento/num10.txt');
    copy('posicionamiento/pos9.txt', 'posicionamiento/pos10.txt');
    fclose($num9); 
    unlink("posicionamiento/num9.txt");
    fclose($pos9);
    unlink("posicionamiento/pos9.txt");
    $crear_noveno = true;    
}

if($_POST['puntos'] < $number9 && $_POST['puntos'] > $number10){
    fclose($num10); 
    unlink("posicionamiento/num10.txt");
    fclose($pos10);
    unlink("posicionamiento/pos10.txt");
    $crear_decimo = true;    
}

if($crear_primero == true){
    
    $num1 = fopen("posicionamiento/num1.txt", "a+");
    fwrite($num1, $_POST['puntos']);
    $pos1 = fopen("posicionamiento/pos1.txt", "a+");
    fwrite($pos1, $_POST['nombre']. " ".$_POST['puntos']." Puntos ". date("d") . "/" . date("m") . "/" . date("Y"));
    
     fwrite($pos1, "
    Telefono: ".$_POST['telefono']);
     
     fwrite($pos1, "
    Tiempo: ".$_POST['tiempo']);

     
     $telefono1 = $_POST['telefono'];
     $puntos1 = $_POST['puntos'];
     $tiempo1 = $_POST['tiempo'];

     
     
    
}

if($crear_segundo == true){
    $num2 = fopen("posicionamiento/num2.txt", "a+");
    fwrite($num2, $_POST['puntos']);
    $pos2 = fopen("posicionamiento/pos2.txt", "a+");
    fwrite($pos2, $_POST['nombre']. " ".$_POST['puntos']." Puntos ". date("d") . "/" . date("m") . "/" . date("Y"));
    
     fwrite($pos2, "
    Telefono: ".$_POST['telefono']);
     
     fwrite($pos2, "
    Tiempo: ".$_POST['tiempo']);

     
     $telefono2 = $_POST['telefono'];
     $puntos2 = $_POST['puntos'];
     $tiempo2 = $_POST['tiempo'];
}

if($crear_tercero == true){
    $num3 = fopen("posicionamiento/num3.txt", "a+");
    fwrite($num3, $_POST['puntos']);
    $pos3 = fopen("posicionamiento/pos3.txt", "a+");
    fwrite($pos3, $_POST['nombre']. " ".$_POST['puntos']." Puntos ". date("d") . "/" . date("m") . "/" . date("Y"));
    
     fwrite($pos3, "
    Telefono: ".$_POST['telefono']);
     
     fwrite($pos3, "
    Tiempo: ".$_POST['tiempo']);

     
     $telefono3 = $_POST['telefono'];
     $puntos3 = $_POST['puntos'];
     $tiempo3 = $_POST['tiempo'];
}

if($crear_cuarto == true){
    $num4 = fopen("posicionamiento/num4.txt", "a+");
    fwrite($num4, $_POST['puntos']);
    $pos4 = fopen("posicionamiento/pos4.txt", "a+");
    fwrite($pos4, $_POST['nombre']. " ".$_POST['puntos']." Puntos ". date("d") . "/" . date("m") . "/" . date("Y"));
    
     fwrite($pos4, "
    Telefono: ".$_POST['telefono']);
     
     fwrite($pos4, "
    Tiempo: ".$_POST['tiempo']);

     
     $telefono4 = $_POST['telefono'];
     $puntos4 = $_POST['puntos'];
     $tiempo4 = $_POST['tiempo'];
}

if($crear_quinto == true){
    $num5 = fopen("posicionamiento/num5.txt", "a+");
    fwrite($num5, $_POST['puntos']);
    $pos5 = fopen("posicionamiento/pos5.txt", "a+");
    fwrite($pos5, $_POST['nombre']. " ".$_POST['puntos']." Puntos ". date("d") . "/" . date("m") . "/" . date("Y"));
    
     fwrite($pos5, "
    Telefono: ".$_POST['telefono']);
     
     fwrite($pos5, "
    Tiempo: ".$_POST['tiempo']);

     
     $telefono5 = $_POST['telefono'];
     $puntos5 = $_POST['puntos'];
     $tiempo5 = $_POST['tiempo'];
}

if($crear_sexto == true){
    $num6 = fopen("posicionamiento/num6.txt", "a+");
    fwrite($num6, $_POST['puntos']);
    $pos6 = fopen("posicionamiento/pos6.txt", "a+");
    fwrite($pos6, $_POST['nombre']. " ".$_POST['puntos']." Puntos ". date("d") . "/" . date("m") . "/" . date("Y"));
    
     fwrite($pos6, "
    Telefono: ".$_POST['telefono']);
     
     fwrite($pos6, "
    Tiempo: ".$_POST['tiempo']);

     
     $telefono6 = $_POST['telefono'];
     $puntos6 = $_POST['puntos'];
     $tiemp6 = $_POST['tiempo'];
}

if($crear_septimo == true){
    $num7 = fopen("posicionamiento/num7.txt", "a+");
    fwrite($num7, $_POST['puntos']);
    $pos7 = fopen("posicionamiento/pos7.txt", "a+");
    fwrite($pos7, $_POST['nombre']. " ".$_POST['puntos']." Puntos ". date("d") . "/" . date("m") . "/" . date("Y"));
    
     fwrite($pos7, "
    Telefono: ".$_POST['telefono']);
     
     fwrite($pos7, "
    Tiempo: ".$_POST['tiempo']);

     
     $telefono7 = $_POST['telefono'];
     $puntos7 = $_POST['puntos'];
     $tiemp7 = $_POST['tiempo'];
}

if($crear_octavo == true){
    $num8 = fopen("posicionamiento/num8.txt", "a+");
    fwrite($num8, $_POST['puntos']);
    $pos8 = fopen("posicionamiento/pos8.txt", "a+");
    fwrite($pos8, $_POST['nombre']. " ".$_POST['puntos']." Puntos ". date("d") . "/" . date("m") . "/" . date("Y"));
    
     fwrite($pos8, "
    Telefono: ".$_POST['telefono']);
     
     fwrite($pos8, "
    Tiempo: ".$_POST['tiempo']);

     
     $telefono8 = $_POST['telefono'];
     $puntos8 = $_POST['puntos'];
     $tiemp8 = $_POST['tiempo'];
}
if($crear_noveno == true){
    $num9 = fopen("posicionamiento/num9.txt", "a+");
    fwrite($num9, $_POST['puntos']);
    $pos9 = fopen("posicionamiento/pos9.txt", "a+");
    fwrite($pos9, $_POST['nombre']. " ".$_POST['puntos']." Puntos ". date("d") . "/" . date("m") . "/" . date("Y"));
    
     fwrite($pos9, "
    Telefono: ".$_POST['telefono']);
     
     fwrite($pos9, "
    Tiempo: ".$_POST['tiempo']);

     
     $telefono9 = $_POST['telefono'];
     $puntos9 = $_POST['puntos'];
     $tiemp9 = $_POST['tiempo'];
}

if($crear_decimo == true){
    $num10 = fopen("posicionamiento/num10.txt", "a+");
    fwrite($num10, $_POST['puntos']);
    $pos10 = fopen("posicionamiento/pos10.txt", "a+");
    fwrite($pos10, $_POST['nombre']. " ".$_POST['puntos']." Puntos ". date("d") . "/" . date("m") . "/" . date("Y"));
    
     fwrite($pos10, "
    Telefono: ".$_POST['telefono']);
     
     fwrite($pos10, "
    Tiempo: ".$_POST['tiempo']);

     
     $telefono10 = $_POST['telefono'];
     $puntos10 = $_POST['puntos'];
     $tiemp10 = $_POST['tiempo'];
}

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