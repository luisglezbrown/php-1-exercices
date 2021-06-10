<?php require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php'; ?>

<!DOCTYPE html>
<html lang="en">
<?php include('./partial/head.php')?>

<body>

    <?php
    $weeekDays = [
        1 => 'lunes',
        2 => 'martes',
        3 => 'miércoles',
        4 => 'jueves',
        5 => 'viernes',
        6 => 'sábado',
        7 => 'domingo',
    ];
    ?>

    <?php include('./navbar.php')?>

    <?php $nombre = $_GET['name'] ?>

    <h1>Hola, <?= $nombre?> </h1>
    <p>Hoy es <strong><?= $weeekDays[date('N')]; ?></strong>. ¿Qué tal estás?</p>
</body>
</html>