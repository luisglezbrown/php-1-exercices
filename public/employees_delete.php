<?php
require $_SERVER['DOCUMENT_ROOT'] . '/lib/app.php';

$body = file_get_contents('php://input');

$person = json_decode($body, true);

$query = 'DELETE FROM employees WHERE id = :identificador';

$stm = $dbConnection->prepare($query);
$stm->bindParam(':identificador', $person['id']);
$stm->execute();

$result = $stm->rowCount();

$response = [
    'status' => $result === 0 ? 'error' : 'success',
    'message' => $result === 0 ? 'No se eliminaron registros' : 'He eliminado '.$result.' registros'
];

echo json_encode($response); 

exit();