<?php 
$product-name = $product-price = $product-description = $product-dimensions = ""
$units-choice = $product-delivery-time-start = $product-delivery-time-end = $time-choice = ""
// include image initialization
$product-inventory-count = $buyer-name = $buyer-phone-number = $buyer-emails = ""
$policy-description = ""

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product-name = ($_POST["product-name"]);
    $product-price = ($_POST["product-price"]);
    $product-description = ($_POST["product-description"]);
    $product-dimensions = ($_POST["product-dimensions"]);
    $units-choice = ($_POST["units-choice"]);
    $product-delivery-time-start = ($_POST["product-delivery-time-start"]);
    $product-delivery-time-end = ($_POST["product-delivery-time-end"]);
    $time-choice = ($_POST["time-choice"]);
    // image stuff
    $product-inventory-count = ($_POST["product-inventory-count"]);
    $buyer-name = ($_POST["buyer-name"]);
    $buyer-phone-number = ($_POST["buyer-phone-number"]);
    $buyer-emails = ($_POST["buyer-emails"]);
    $policy-description = ($_POST["policy-description"]);
}

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $product-name = test_input($_POST["product-name"]);
//     $product-price = test_input($_POST["product-price"]);
//     $product-description = test_input($_POST["product-description"]);
//     $product-dimensions = test_input($_POST["product-dimensions"]);
//     $units-choice = test_input($_POST["units-choice"]);
//     $product-delivery-time-start = test_input($_POST["product-delivery-time-start"]);
//     $product-delivery-time-end = test_input($_POST["product-delivery-time-end"]);
//     $time-choice = test_input($_POST["time-choice"]);
//     // image stuff
//     $product-inventory-count = test_input($_POST["product-inventory-count"]);
//     $buyer-name = test_input($_POST["buyer-name"]);
//     $buyer-phone-number = test_input($_POST["buyer-phone-number"]);
//     $buyer-emails = test_input($_POST["buyer-emails"]);
//     $policy-description = test_input($_POST["policy-description"]);
// }

// function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
// }

echo "<h2>Your Input:</h2>";
echo "$product-name";
?>