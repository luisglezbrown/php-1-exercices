<!DOCTYPE html>
<html lang="en">
<?php include('./partial/head.php')?>

<body>

    <?php include('./navbar.php')?>

    <?php if(isset($_GET['message'])) :?>
        <p><?= $_GET['message']; ?></p>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Edad</th>
                <th>Ciudad</th>
                <th>Acciones</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach($people as $person) : ?>
                <tr>
                    <td><a href="/employees.php?id=<?= $person['id']?>"><?= $person['id']?></a></td>           
                    <td><?= $person['name']?></td>
                    <td><a href="/employees.php?email=<?= $person['email']?>"><?= $person['email']?></a></td>           
                    <td><?= $person['age']?></td>           
                    <td><?= $person['city']?></td>           
                    <td><button class="employees-delete-button" value='Eliminar' data-person='<?= json_encode($person); ?>'>Eliminar</button></td>           
        </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
 
    <hr>

    <?php
        // Esta query es para el formulario.
        if (isset($_GET['id'])) {
            $query = 'SELECT * FROM employees WHERE id = :identificador';
            $stm = $dbConnection->prepare($query);
            $stm->bindParam(':identificador', $_GET['id']);
            $stm->execute();
            $currentPerson = $stm->fetch(PDO::FETCH_ASSOC);
        } elseif (isset($_GET['email'])) {
            $query = 'SELECT * FROM employees WHERE email = :correo';
            $stm = $dbConnection->prepare($query);
            $stm->bindParam(':correo', $_GET['email']);
            $stm->execute();
            $currentPerson = $stm->fetch(PDO::FETCH_ASSOC);
        }
    ?>

    <form method="POST" action="/employees_add.php" enctype="multipart/form-data">
        <?php if(isset($currentPerson)): ?>
        <input type="hidden" id="id" name="id" value="<?= $currentPerson['id']; ?>"/>
        <?php endif; ?>
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" value="<?= $currentPerson['name'] ?>" required/>
        <br/>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?= $currentPerson['email'] ?>" required/>
        <br/>
        <label for="age">Edad</label>
        <input type="number" id="age" name="age" value="<?= $currentPerson['age'] ?>" required/>
        <br/>
        <label for="city">Ciudad</label>
        <input type="text" id="city" value="<?= $currentPerson['city'] ?>" name="city" />
        <br/>
        <label for="archivo">Archivo</label>
        <input type="file" id="archivo" name="archivo" />        
        <hr/>
        <input type="submit" value="Enviar"/>
    </form>

    <?php include('./partial/footer.php')?>

</body>
</html>