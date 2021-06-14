<?php
$escribir = false;
$crear_primero = false;
$primero = 0;
$pos1 = fopen("posicionamiento/pos1.txt", "a+");
if(isset($_POST['puntos'])  && isset($_POST['tiempo']) ){
    echo "<h1>Tus Datos</h1>";
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
if($_POST['puntos'] > $primero){
    fclose($pos1);
    unlink("posicionamiento/pos1.txt");
    $crear_primero = true;    
}

if($crear_primero == true){
    $pos1 = fopen("posicionamiento/pos1.txt", "a+");
    $nombre1 = fwrite($pos1, "Nombre: ".$_POST['nombre']);
    $telefono1 = fwrite($pos1, "
    Telefono: ".$_POST['telefono']);
    $puntos1 = fwrite($pos1, "
    Puntos: ".$_POST['puntos']);
    $tiempo1 = fwrite($pos1, "
    Tiempo: ".$_POST['tiempo']);
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
            <li><?php echo $nombre1." : ".$puntos1.", ".$tiempo1; ?></li>
            <li>María : 27 puntos</li>
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