<?php

    session_start();

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 1</title>
</head>

<body>

    <h1>Supermarket management</h1>

    <form action="ExerciseSession01.php" method="POST">
        <label for="worker">Worker name:</label>
        <input type="text" id="worker" name="worker" value="<?php  ?>">

        <h2>Choose product:</h2>
        <select name="product" id="product">
            <option value="milk">Milk</option>
            <option value="softDrink">Soft Drink</option>
        </select>

        <h2>Product quantity:</h2>
        <input type="number" id="quantity" name="quantity" min="1"><br><br>
        <input type="submit" value="add" name="add">
        <input type="submit" value="remove" name="remove">
        <input type="reset" value="reset">

        <h2>Inventory:</h2>
        <p>Worker: <?php ?></p>
        <p>Units milk: <?php ?></p>
        <p>Units soft drink: <?php ?></p>
    </form>

</body>

</html>