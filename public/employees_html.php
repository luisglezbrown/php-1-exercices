<!DOCTYPE html>
<html lang="en">
<?php include('./partial/head.php')?>

<body>

    <?php include('./navbar.php')?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Ciudad</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($people as $person) : ?>
                <tr>
                    <td><?= $person['id']?></td>
                    <td><?= $person['name']?></td>
                    <td><a href="/employees.php?id=<?= $person['id']?>"><?= $person['email']?></a></td>           
                    <td><?= $person['age']?></td>           
                    <td><?= $person['city']?></td>           
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>