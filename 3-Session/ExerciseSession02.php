<?php

session_start();

// create initial array and set session
$array = array(10, 20, 30);
$_SESSION['array'] = $array;

// get new position and value
$new_position = $_POST['new_position'];
$new_value = $_POST['new_value'];

if (isset($_POST['mod'])) {
    if (isset($new_position) && isset($new_value)) {
        if ($new_position < count($array) && $new_position >= 0) {
            $array[$new_position] = $new_value;
        } else {
            echo "<br>Error. The new value can't be in that position.";
        }
    }
}

if (isset($_POST['avg'])) {
    function calculateAvg($array)
    {
        return number_format(array_sum($array) / count($array), 2, ',', '.');
    }

    $media = calculateAvg($array);
}

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

        <p>Position to modify: </p>
        <select name="new_position" id="new_position">
            <?php

            for ($i = 0; $i < count($array); $i++) {
                echo "<option value='$i'>$i</option>";
            }

            ?>
        </select>

        <br><br>

        <label for="new_value">New value: </label>
        <input type="number" name="new_value" id="new_value">

        <br><br>
        <input type="submit" value="Modify" name="mod">
        <input type="submit" value="Average" name="avg">
        <input type="reset" value="Reset">

        <p>Current array:
            <?php echo implode(", ", $array); ?>
        </p>
    </form>

</body>

</html>