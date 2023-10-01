<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio_button.php" method="post">
        <input type="radio" name="credit_card" value="Visa">Visa</input><br/>
        <input type="radio" name="credit_card" value="Mastercard">Mastercard</input><br/>
        <input type="radio" name="credit_card" value="AmericaExpress">America Express</input><br/>
        <input type="submit" name="confirm" value="Confirm">
    </form>
    
</body>
</html>

<?php
    if(isset($_POST['confirm'])){
        $creditcard = null;

        if(isset($_POST['credit_card'])) {
            $creditcard = $_POST['credit_card'];
        }
    
        switch($creditcard){
            case "Visa":
                echo "You selected Visa";
                break;
            case "Mastercard":
                echo "You selected Mastercard";
                break;
            case "AmericaExpress":
                echo "You selected America Express";
                break;
            default:
                echo "Please make a selection";
        }
    }
?>