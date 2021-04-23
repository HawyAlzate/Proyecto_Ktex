<?php 
include("include.php");


$arrayColores = [];
 array_push($arrayColores, $_POST[$Color0]);
 array_push($arrayColores, $_POST[$Color1]);
 array_push($arrayColores, $_POST[$Color2]);
 array_push($arrayColores, $_POST[$Color3]);
 array_push($arrayColores, $_POST[$Color4]);
 array_push($arrayColores, $_POST[$Color5]);
 array_push($arrayColores, $_POST[$Color6]);
 array_push($arrayColores, $_POST[$Color7]);
 array_push($arrayColores, $_POST[$Color8]);
 array_push($arrayColores, $_POST[$Color9]);

function Eliminar($conex, $arrayColores, $Color0, $Referencia){

    foreach ($arrayColores as $Color){
        
    $Eliminar= "UPDATE stock_disponible SET  $Color0 = ($Color0 - $Color)  WHERE  Referencia = '$Referencia'";
    
    $eliminar = mysqli_query($conex, $Eliminar);

    echo $eliminar;
    }
}
