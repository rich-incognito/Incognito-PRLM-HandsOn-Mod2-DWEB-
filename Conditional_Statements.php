<!-- 
 INCOGNITO, Rich Cristoff C.
 WD - 201
 November 27, 2025
-->

<?php 

    $Customer = "Gabogsh";
    $Meal_Ordered = "Chicken Rice Meal"; 
    $Drink_Ordered = "Large Coke Zero"; 
    $Payment = 200;

    $Meal_Price = 150;
    $Drink_Price = 60;
    $Total_Price = $Meal_Price + $Drink_Price;

    //IF ELSEIF 
    if ($Total_Price > $Payment){
        $Order_Mess = "Sorry, your order exceeds your Payment.";
    } elseif ($Total_Price == $Payment){
        $Order_Mess = "Perfect! You used your exact Payment.";
    } else {
        $Order_Mess = "Great choice! You still have PHP " . ($Payment - $Total_Price) . " left.";
    }

    //SWITCH 
    switch($Meal_Ordered){
        case "Chicken Rice Meal":
            $Meal_Message = "Our best-seller! Crispy chicken with rice.";
            break;
        case "Burger Meal":
            $Meal_Message = "Juicy burger with Popeyes signature flavor.";
            break;
        case "Spaghetti Meal":
            $Meal_Message = "Sweet-style spaghetti with fried chicken.";
            break;
        default:
            $Meal_Message = "Meal not available on the Popeyes menu.";
    }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Popeye's (Conditional)</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Popeyes Fried Chicken Order</h1>
    
    <h2>Customer: <?php echo $Customer; ?></h2>
    <p>Meal Ordered: <?php echo $Meal_Ordered; ?></p>
    <p>Drink Ordered: <?php echo $Drink_Ordered; ?></p>
    <p>Total Price: PHP <?php echo $Total_Price; ?></p>

    <h3>Order Status: <?php echo $Order_Mess; ?></h3>

    <hr>

    <h2>Message of the Day</h2>
    <p><?php echo $Meal_Message; ?></p>

</body>

<!-- INCLUDE (FOOTER) -->
<?php include 'footer.php'; ?> 

</html>
