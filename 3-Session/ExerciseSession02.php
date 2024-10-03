<?php

session_start();

// create initial array and set session
$array = array(10, 20, 30);
$_SESSION["array"] = $array;

$errorValue = false;

if (isset($_POST["submit"])) {

    // reset error
    $errorValue = false;

    // get variables
    $submit = $_POST["submit"];
    $new_position = $_POST["new_position"];
    $new_value = $_POST["new_value"];

    // value error
    if ($new_value == null) {
        $errorValue = true;
    }

    switch ($submit) {
        case "modify":
            if ($new_position < count($array) && $new_position >= 0) {
                $array[$new_position] = $new_value;
            } else {
                echo "<br>Error. The new value can't be in that position.";
            }
            break;
        case "average":
            $media = calculateAvg($array);
            break;
        case "reset":
            session_unset();
            session_destroy();
            session_abort();
            header("Refresh:0");
            break;
    }
}

function calculateAvg($array)
{
    return number_format(array_sum($array) / count($array), 2, ',', '.');
}

function errorValue($errorValue)
{
    if ($errorValue) {
        echo "<p style='color:red;'>Error. You have to input a value to be modified.</p>";
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
        <input type="submit" value="modify" name="submit">
        <input type="submit" value="average" name="submit">
        <input type="submit" value="reset" name="submit">

        <?php errorValue($errorValue); ?>

        <p>Current array:
            <?php echo implode(", ", $array); ?>
        </p>
    </form>

</body>

</html>