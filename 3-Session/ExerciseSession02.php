<?php

session_start();

// create initial array and set session
$array = array(10, 20, 30);
$_SESSION["array"];

$errorValue = false;
$errorPosition = false;

if (isset($_POST["mod"]) && $_POST["new_value"] != null) {

    // reset error
    $errorValue = false;
    $errorPosition = false;

    // get variables
    $mod = $_POST["mod"];
    $new_position = $_POST["new_position"];
    $new_value = $_POST["new_value"];

    // value error
    if ($new_value == null) {
        $errorValue = true;
    }

    // modify position and value
    if ($new_position < count($array) && $new_position >= 0) {
        $array[$new_position] = $new_value;
    } else {
        $errorPosition = true;
    }
} else {
    $errorValue = true;
}

if (isset($_POST["avg"])) {
    function calculateAvg($array)
    {
        return number_format(array_sum($array) / count($array), 2, ',', '.');
    }

    $media = calculateAvg($array);
}

if (isset($_POST["reset"])) {
    session_unset();
    session_destroy();
    session_abort();
    header("Refresh:0");
}

function errorValue($errorValue)
{
    if ($errorValue) {
        echo "<p style='color:red;'>Error. You have to input a value to be modified.</p>";
    }
}

function errorPosition($errorPosition)
{
    if ($errorPosition) {
        echo "<p style='color:red;'>Error. That position can't be modified.</p>";
    }
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
        <input type="submit" value="modify" name="mod">
        <input type="submit" value="average" name="avg">
        <input type="submit" value="reset" name="reset">

        <?php errorValue($errorValue); ?>

        <p>Current array:
            <?php echo implode(", ", $array); ?>
        </p>
        <?php if (isset($_POST["avg"])) echo "Average: $media"; ?>
    </form>

</body>

</html>