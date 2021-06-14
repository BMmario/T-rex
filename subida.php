<?php

if(isset($_POST['puntos'])  && isset($_POST['tiempo']) ){
    echo "<h1>Puntos: ".$_POST['puntos']."</h1>";
    echo "Tiempo: ".$_POST['tiempo'];
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

