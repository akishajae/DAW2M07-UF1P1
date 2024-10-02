<?php

session_start();

// save inventory in session
$_SESSION["inventory"] = array("milk" => 0, "soft_drink" => 0);

// button options
// para ahorrar ifs
if (isset($_POST["submit"])) {
    // get variables
    $submit = $_POST["submit"];
    $worker = $_POST["worker"];
    $product = $_POST["product"];
    $quantity = $_POST["quantity"];

    // save in sessions
    $_SESSION["worker"] = $worker;

    switch ($submit) {
        case "add":
            switch ($product) {
                case "milk":
                    $_SESSION["inventory"]["milk"] += (int)$quantity;
                    break;
                case "soft_drink":
                    $_SESSION["inventory"]["soft_drink"] += (int)$quantity;
                    break;
            }
            break;
        case "remove":
            switch ($product) {
                case "milk":
                    $_SESSION["inventory"]["milk"] -= $quantity;
                    break;
                case "soft_drink":
                    $_SESSION["inventory"]["soft_drink"] -= $quantity;
                    break;
            }
            break;
        case "reset":
            session_unset();
            break;
    }
}

// function errorAlert() {
//     echo "<p>Error. You've made a mistake.</p>";
// }

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

        <h2>Inventory:</h2>
        <p>Worker: <?php echo isset($_SESSION["woker"]) ? $_SESSION["woker"] : " "; ?></p>
        <p>Units milk: <?php echo isset($_SESSION["inventory"]["milk"]) ? $_SESSION["inventory"]["milk"] : " "; ?></p>
        <p>Units soft drink: <?php echo isset($_SESSION["inventory"]["soft_drink"]) ? $_SESSION["inventory"]["soft_drink"] : " "; ?></p>
    </form>

</body>

</html>