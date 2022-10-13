<?php
function validacion(){
    if (isset($_POST['inputs']) and !empty($_POST['inputs'])) {
        $errores = [];
        $generador = $_POST['inputs'];
            if((!stringT($generador))){       
            array_push($errores, "<h2 class='error'>Dato incorrecto</h2>");
            }else if($generador < 0){
            array_push($errores, "<h2 class='error'>No se aceptan valores negativos</h2>");
            }else if($generador > 5){
            array_push($errores, "<h2 class='error'>Maximo 5 campos</h2>");
            }else{
                generadorinputs($generador);
            }
            if (count($errores)){
                for ($i=0; $i <count($errores); $i++) { 
                    echo  $errores[$i] ;
                 }
             }
    }else if(!empty($_POST['enviarform'])){
        vacio();
    }
}

function vacio(){
    echo "<h2 class='error'> El campo no debe estar vacio </h2>";
}
function stringT($generador){
    return (filter_var($generador, FILTER_VALIDATE_INT) === FALSE) ? False : True;
}

function generadorinputs($generador){
    for ($i=1; $i <=$generador; $i++) { 
       include './inputdise.php';
    }
    echo"<form action=''><input class='promediar__input' type='submit' value='promediar'></form>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/index.css">
    <title></title>
</head>
<body>
    
</body>
</html>