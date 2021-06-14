<?php
$escribir = false;
if(isset($_POST['puntos'])  && isset($_POST['tiempo']) ){
    echo "<h1>Tus Datos</h1>";
    echo "<h2> Nombre: ".$_POST['nombre']."</h2>";
    echo "<h4>Puntos: ".$_POST['puntos']."</h4>";
    echo "Tiempo: ".$_POST['tiempo']." segundos";
}else{
    echo "no se ha recibido nada";
}

if(file_exists("posicionamiento/pos1.txt")){
    
    
    
}else{
    $escribir = true;
    $pos1 = fopen("posicionamiento/pos1.txt", "a+");
}

if($escribir == true){
    
    fwrite($pos1, "Nombre: ".$_POST['nombre']);
    
    fwrite($pos1, "
    Telefono: ".$_POST['telefono']);

    fwrite($pos1, "
    Puntos: ".$_POST['puntos']);

    fwrite($pos1, "
    Tiempo: ".$_POST['tiempo']);

    $escribir = false;
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
            <li>Juan : 30 puntos</li>
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