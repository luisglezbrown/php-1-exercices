<!DOCTYPE html>
<html lang="en">
<?php include('./partial/head.php')?>

<body>

    <?php
        $people = [
            ['name' => 'Carlos', 'email' => 'carlos@correo.com', 'age' => 20, 'city' => 'Benalmádena'],
            ['name' => 'Carmen', 'email' => 'carmen@correo.com', 'age' => 15, 'city' => 'Fuengirola'],
            ['name' => 'Carmelo', 'email' => 'carmelo@correo.com', 'age' => 17, 'city' => 'Torremolinos'],
            ['name' => 'Carolina', 'email' => 'carolina@correo.com', 'age' => 18, 'city' => 'Málaga'],
        ]; 
    ?>

    <?php include('./navbar.php')?>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($people as $person) : ?>
                <tr>
                    <td><?= $person['name']?></td>
                    <td><?= $person['email']?></td>           
                    <td><?= $person['age']?></td>           
                    <td><?= $person['city']?></td>           
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>