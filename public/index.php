<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hola Luis</h1>
    <p>Hoy es <strong><?php setlocale(LC_TIME, 'es_ES', 'Spanish_Spain', 'Spanish'); echo strftime("%A"); ?></strong>. ¿Qué tal estás?</strong></p>
</body>
</html>


<!-- 
<?php  

$wdayNumber = getdate()['wday'];

switch($wdayNumber){
    case (0):
        $wdayText = "domingo";
        break;
    case (1):
        $wdayText = "lunes";
        break;
    case (2):
        $wdayText = "martes";
        break;
    case (3):
        $wdayText = "miércoles";
        break;
    case (4):
        $wdayText = "jueves";
        break;
    case (5):
        $wdayText = "viernes";
        break;
    case (6):
        $wdayText = "sábado";
        break;                  
}

print_r($wdayText);
?>
 -->
