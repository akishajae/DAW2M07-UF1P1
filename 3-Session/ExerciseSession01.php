<?php

session_start();

$errorRemove = false;
$errorQuantity = false;

// button options
// para ahorrar ifs
if (isset($_POST["submit"])) {

    // reset error
    $errorRemove = false;
    $errorQuantity = false;

    // get variables
    $submit = $_POST["submit"];
    $worker = $_POST["worker"];
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];

    // quantity error
    if ($quantity == null) {
        $errorQuantity = true;
    }

    // save in sessions
    $_SESSION["worker"] = $worker;

    
    if (!isset($_SESSION["milk"]) && !isset($_SESSION["soft_drink"])) {
        $_SESSION["milk"] = 0;
        $_SESSION["soft_drink"] = 0;
    }

    switch ($submit) {
        case "add":
            switch ($product) {
                case "milk":
                    $_SESSION["milk"] += (int)$quantity;
                    break;
                case "soft_drink":
                    $_SESSION["soft_drink"] += (int)$quantity;
                    break;
            }
            break;
        case "remove":
            switch ($product) {
                case "milk":
                    if ($quantity <= $_SESSION["milk"]) {
                        $_SESSION["milk"] -= (int)$quantity;
                    } else {
                        $errorRemove = true;
                    }
                    break;
                case "soft_drink":
                    if ($quantity <= $_SESSION["milk"]) {
                        $_SESSION["soft_drink"] -= (int)$quantity;
                    } else {
                        $errorRemove = true;
                    }
                    break;
            }
            break;
        case "reset":
            session_unset();
            session_destroy();
            session_abort();
            header("Refresh:0");
            break;
    }
}
function errorRemove($errorRemove)
{
    if ($errorRemove) {
        echo "<p style='color:red;'>Error. We don't have that amount of product to be removed.</p>";
    }
}

function errorQuantity($errorQuantity)
{
    if ($errorQuantity) {
        echo "<p style='color:red;'>Error. You have to input an amount of product you want to modify.</p>";
    }
}

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
        <input type="text" id="worker" name="worker" value="<?php echo isset($_POST["worker"]) ? $_POST["worker"] : " "; ?>">

        <h2>Choose product:</h2>
        <select name="product" id="product">
            <option value="milk">Milk</option>
            <option value="soft_drink">Soft Drink</option>
        </select>

        <h2>Product quantity:</h2>
        <input type="number" id="quantity" name="quantity" min="1"><br><br>

        <input type="submit" value="add" name="submit">
        <input type="submit" value="remove" name="submit">
        <input type="submit" value="reset" name="submit">

        <?php errorQuantity($errorQuantity);
        errorRemove($errorRemove); ?>

        <h2>Inventory:</h2>
        <p>Worker: <?php echo isset($_SESSION["worker"]) ? $_SESSION["worker"] : " "; ?></p>
        <p>Units milk: <?php echo isset($_SESSION["milk"]) ? $_SESSION["milk"] : "0"; ?></p>
        <p>Units soft drink: <?php echo isset($_SESSION["soft_drink"]) ? $_SESSION["soft_drink"] : "0"; ?></p>
    </form>

</body>

</html>