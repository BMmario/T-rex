<?php

if(isset($_GET['puntos']) && isset($_GET['tiempo'])){
    echo "<h1>Puntos: ".$_GET['puntos']."</h1>";
    echo "Tiempo: ".$_POST['tiempo'];
}else{
    echo "no se ha recibido nada";
}