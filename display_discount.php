<?php

//Step 1
$Product_Description = $_POST['product_description'];
$List_Price = $_POST['list_price'];
$Discount_Percentage = $_POST['discount_percent'];

//Step 3

$list_price = "$".number_format($List_Price);
$discount_percentage = $Discount_Percentage."%";

//Step 4

$Discount = $List_Price * $Discount_Percentage * .01; 
$Discount_formatted = "$".number_format ($Discount); // display the formatted discount with $ sign

$Discount_Price = $List_Price - $Discount;
$Discount_Price_formatted = "$".number_format ($Discount_Price); // display the formatted discount
// price with $ sign
?>




<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>This page is under construction</h1>

        <label>Product Description:</label>
        <span><?php echo $Product_Description; ?></span><br>

        <label>List Price:</label>
        <span><?php echo $list_price; ?></span><br>

        <label>Standard Discount:</label>
        <span><?php echo $discount_percentage; ?></span><br>

        <label>Discount Amount:</label>
        <span><?php echo $Discount_formatted; ?></span><br>

        <label>Discount Price:</label>
        <span><?php echo $Discount_Price_formatted; ?></span><br>
    </main>
</body>
</html>
