<?php 
    require $_SERVER['DOCUMENT_ROOT'].'/lib/app.php'; 


    $query = (isset($_GET['id'])) 
    ? 'SELECT * FROM employees WHERE id='.$_GET['id'] 
    : 'SELECT * FROM employees';

    $stm = $dbConnection->query($query);
    $people = $stm->fetchAll(PDO::FETCH_ASSOC);

?>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/employees_'.(isset($_GET['format']) ? $_GET['format'] : 'html').'.php';