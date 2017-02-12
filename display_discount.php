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
$Discount_formatted = "$".number_format ($Discount); // display the formatted discount with $ sign (Step 5)

$Discount_Price = $List_Price - $Discount;
$Discount_Price_formatted = "$".number_format ($Discount_Price); // display the formatted discount (Step 5)
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
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><b><i><?php echo $Product_Description; ?></i></b></span><br>

        <label>List Price:</label>
        <span><b><?php echo $list_price; ?></b></span><br>

        <label>Standard Discount:</label>
        <span><b><?php echo $discount_percentage; ?></b></span><br>

        <label>Discount Amount:</label>
        <span><b><u><?php echo $Discount_formatted; ?></u></b></span><br> 

        <label>Discount Price:</label>
        <span><b><u><?php echo $Discount_Price_formatted; ?></u></b></span><br>
    </main>
</body>
</html>
