<?php
$escribir = false;
$crear_primero = false;
$crear_segundo = false;
$dar_segundo = false;
$primero = 0;
$num1 = fopen("posicionamiento/num1.txt", "a+");
$pos1 = fopen("posicionamiento/pos1.txt", "a+");

$num2 = fopen("posicionamiento/num2.txt", "a+");
$pos2 = fopen("posicionamiento/pos2.txt", "a+");

$num3 = fopen("posicionamiento/num3.txt", "a+");
$pos3 = fopen("posicionamiento/pos3.txt", "a+");

$num4 = fopen("posicionamiento/num4.txt", "a+");
$pos4 = fopen("posicionamiento/pos4.txt", "a+");

$num5 = fopen("posicionamiento/num5.txt", "a+");
$pos5 = fopen("posicionamiento/pos5.txt", "a+");



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
if($_POST['puntos'] > intval(fgets($num1))){
    fclose($num1);
    unlink("posicionamiento/num1.txt");
    fclose($pos1);
    unlink("posicionamiento/pos1.txt");
    $crear_primero = true;    
}else{
    $dar_segundo = true;
}

if($dar_segundo == true && $_POST['puntos'] > intval(fgets($num2))){
    fclose($num2);
    unlink("posicionamiento/num2.txt");
    fclose($pos2);
    unlink("posicionamiento/pos2.txt");
    $crear_segundo = true;   
    $dar_segundo = false; 
}

if($crear_primero == true){
    $num1 = fopen("posicionamiento/num1.txt", "a+");
    fwrite($num1, $_POST['puntos']);
    $pos1 = fopen("posicionamiento/pos1.txt", "a+");
    fwrite($pos1, $_POST['nombre']. " ".$_POST['puntos']." Puntos");
    
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
    fwrite($pos2, $_POST['nombre']. " ".$_POST['puntos']." Puntos");
    
     fwrite($pos2, "
    Telefono: ".$_POST['telefono']);
     
     fwrite($pos2, "
    Tiempo: ".$_POST['tiempo']);

     
     $telefono2 = $_POST['telefono'];
     $puntos2 = $_POST['puntos'];
     $tiempo2 = $_POST['tiempo'];
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
            <li>Antonio : 25 puntos</li>
            <li>Marcos : 24 puntos</li>
            <li>Pepe : 21 puntos</li>
            <li>Carlos : 19 puntos</li>
            <li>Miguel : 17 puntos</li>
            <li>Lucas : 14 puntos</li>
            <li>Mariano : 10 puntos</li>
            <li>Marta : 3 puntos</li>
        </ol>
    </div>
    <h3><a href="./index.html"> Volver a jugar</a></h3>
    <script src="./clasificaciones.js"></script>
</body>
</html>