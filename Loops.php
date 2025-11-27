<!-- 
 INCOGNITO, Rich Cristoff C.
 WD - 201
 November 27, 2025
-->

<?php 

    $MQuantity = 1;
    $DQuantity = 1;
    $Meals_Price = 150;
    $Drinks_Price = 40;
    $Meal_Max_Orders = 3;
    $Drinks_Max_Orders = 5;

    $Meals_Message = "You can only order up to 3 meals at a time.";
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Popeye's (Loops)</title>
  <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Popeyes Fried Chicken Menu</h1>
    <h2>Meals Prices:</h2>
    <p>
        <?php 
        while ($MQuantity <= $Meal_Max_Orders){ //WHILE LOOP 
            echo $MQuantity;
            echo ' rice meals cost PHP ';
            echo $Meals_Price * $MQuantity;
            echo '<br>';
            $MQuantity++;
        }
        ?>
    </p>

    <h3> Note: <?php echo $Meals_Message; ?></h3>

        <p>
    <h2>Drinks Prices:</h2>
        <?php 
        do {
            echo $DQuantity;
            echo ' drinks cost PHP ';
            echo $Drinks_Price * $DQuantity;
            echo '<br>';
            $DQuantity++;      
        } while ($DQuantity <= $Drinks_Max_Orders); //DO WHILE LOOP 
        ?>
    </p>
    <h3>Note: You can only order up to 5 drinks at a time.</h3>

</body>

<!-- INCLUDE (FOOTER)  -->
<?php include 'footer.php'; ?> 

</html>