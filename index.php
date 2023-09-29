<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <!-- <form action="index.php" method="get">
        <label>username:</label><br>
        <input type="text" name="username"><br>
        <label>password:</label><br>
        <input type="text" name="password"><br>
        <input type="submit" value="Log in">
    </form> -->

    <form action="index.php" method="post">
        <label>Quantity:</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">
    </form>

    
</body>
</html>

<?php
    $item = "pizza";
    $price = 5;
    $quantity = $_POST["quantity"];
    $total = $price * $quantity;

    echo "You have order {$quantity} * {$item}s for \${$total} dollars"
?>