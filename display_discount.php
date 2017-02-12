<?php

//Step 1
$Product_Description = filter_input(INPUT_POST, 'product_description');
$List_Price = filter_input(INPUT_POST, 'list_price');
$Discount_Percent = filter_input(INPUT_POST, 'discount_percent'); // step 3 modified

//Step 3

$list_price = "$".number_format($List_Price);
// $discount_percentage = $Discount_Percentage."%";
$Discount_Percent = $Discount_Percent. "%";

//Step 4

$Discount = $List_Price * $Discount_Percent * .01; 
$Discount_formatted = "$".number_format ($Discount); // Displaying $ sign for Step 3 modification
// $Discount_formatted = "$".number_format ($Discount_Percent); // display the formatted discount with $ sign (Step 5)

$Discount_Price = $List_Price - $Discount;
$Discount_Price_formatted = "$".number_format ($Discount_Price); // display the formatted discount (Step 5)  price with $ sign
?>




<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo htmlspecialchars($Product_Description); ?></span><br>

        <label>List Price:</label>
        <span><?php echo htmlspecialchars($list_price); ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo htmlspecialchars($Discount_Percent); ?></span><br>

        <label>Discount Amount:</label>
        <span><b><u><?php echo $Discount_formatted; ?></u></b></span><br> 

        <label>Discount Price:</label>
        <span><b><u><?php echo $Discount_Price_formatted; ?></u></b></span><br>
    </main>
</body>
</html>
