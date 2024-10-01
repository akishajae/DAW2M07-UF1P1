<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 2</title>
</head>

<body>

    <h1>Modify array saved in session</h1>

    <form action="ExerciseSession02.php" method="POST">

        <p>Position to modify</p>
        <select name="position" id="position">
            
        </select>

        <label for="new_value">New value:</label>
        <input type="number" name="new_value" id="new_value">

        <input type="submit" value="mod" name="mod">
        <input type="submit" value="avg" name="avg">
        <input type="reset" value="reset">

        <p>Current array: <?php ?></p>
    </form>

</body>

</html>