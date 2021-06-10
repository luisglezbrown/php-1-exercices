<?php

    // Ejercicio: Actualizar los datos del usuario.

require $_SERVER['DOCUMENT_ROOT'].'/lib/app.php';
$query = 'UPDATE `employees` SET (`id`, `name`, `email`, `age`, `city`) VALUES (:id, :nombre, :correo, :edad, :ciudad) WHERE id = :identificador';

$stm = $dbConnection->prepare($query);

$params = [
    ':id' => $_POST['id'],
    ':nombre' => $_POST['name'],
    ':correo' => $_POST['email'],
    ':edad' => $_POST['age'],
    ':ciudad' => $_POST['city'],
];
    
$stm->execute($params);

header('Location: /employees.php?message='. urlencode('El usuario ' . $_POST['email'] . ' se ha añadido correctamente.'));

print_r($_POST);