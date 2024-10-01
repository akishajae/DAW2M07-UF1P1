<?php

session_start();

if (isset($_POST['worker'])) {
    // get worker and set session
    $worker = $_POST['worker'];
    $_SESSION['worker'] = $worker;
}

if (isset($_POST['product']) && isset($_POST['quantity'])) {
    // get product and quantity
    $product = $_POST['product'];
    $quantity = $_POST['quantity'];

    // add products
    if (isset($_POST['add'])) {
        switch ($product) {
            case 'milk':
                $_SESSION['milk'] += $quantity;
                break;
            case 'soft_drink':
                $_SESSION['soft_drink'] += $quantity;
                break;
            default:
                echo "<br>Error.";
                break;
        }
    }

    // remove products
    if (isset($_POST['remove'])) {
        switch ($product) {
            case 'milk':
                if ($quantity <= $_SESSION['milk']) {
                    $_SESSION['milk'] -= $quantity;
                } else {
                    echo "<br>Error. There isn't that amount of milk.";
                }
                break;
            case 'soft_drink':
                if ($quantity <= $_SESSION['soft_drink']) {
                    $_SESSION['soft_drink'] -= $quantity;
                } else {
                    echo "<br>Error. There isn't that amount of soft drinks.";
                }
                break;
            default:
                echo "<br>Error.";
                break;
        }
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
        <input type="submit" value="add" name="add">
        <input type="submit" value="remove" name="remove">
        <input type="reset" value="reset">

        <h2>Inventory:</h2>
        <p>Worker: <?php echo isset($_SESSION['worker']) ? $_SESSION['worker'] : " "; ?></p>
        <p>Units milk: <?php echo isset($_SESSION['milk']) ? $_SESSION['milk'] : " "; ?></p>
        <p>Units soft drink: <?php echo isset($_SESSION['soft_drink']) ? $_SESSION['soft_drink'] : " "; ?></p>
    </form>

</body>

</html>