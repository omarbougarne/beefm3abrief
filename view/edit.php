<?php
ob_start();
?>
    <form action="/index.php?action=update" method="post">
        <label for="firstName">ID:</label>
        <input name="ID" value="<?= $bus->ID?>">
        <br>

        <label for="lastName">Bus Name:</label>
        <input name="bus_name" value="<?= $bus->bus_name?>">
        <br>

        <label for="email">License:</label>
        <input name="license" value="<?= $bus->license?>">
        <br>

        <label for="password">Company:</label>
        <input name="company" value="<?= $bus->company?>">
        <br>

        <label for="age">Capacity:</label>
        <input name="capacity" value="<?= $bus->capacity?>">
        <br>
        <label for="age">fkfk:</label>
        <input name="fk" value="<?= $bus->fk?>">
        <br>

        <input type="submit" value="Modified" name="modified">
    </form>


<?php $content = ob_get_clean(); ?>
<?php include_once 'layout.php';?>
