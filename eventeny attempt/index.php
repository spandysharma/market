<?php
if (isset($_POST['submitButton'])) 
{
    if ((!isset($_POST['productName'])) || (!isset($_POST['productPrice'])) ||
		(!isset($_POST['productDescription'])) || (!isset($_POST['productDimensions'])) ||
		(!isset($_POST['unitsChoice'])) || (!isset($_POST['productDeliveryTimeStart'])) ||
        (!isset($_POST['productDeliveryTimeEnd'])) || (!isset($_POST['timeChoice'])) ||
        (!isset($_POST['productImage'])) || (!isset($_POST['productInventoryCount'])) ||
        (!isset($_POST['buyerName'])) || (!isset($_POST['buyerPhoneNumber'])) ||
        (!isset($_POST['buyerEmails'])) || (!isset($_POST['policyDescription'])))
	{
		$error = "*" . "Please fill all the required fields";
	}
	else 
    {
        $productName = $_POST['productName'];
        $productPrice = $_POST['productPrice'];
        $productDescription = $_POST['productDescription'];
        $productDimensions = $_POST['productDimensions'];
        $unitsChoice = $_POST['unitsChoice'];
        $productDeliveryTimeStart = $_POST['productDeliveryTimeStart'];
        $productDeliveryTimeEnd = $_POST['productDeliveryTimeEnd'];
        $timeChoice = $_POST['timeChoice'];
        $productImage = $_POST['productImage'];
        $productInventoryCount = $_POST['productInventoryCount'];
        $buyerName = $_POST['buyerName'];
        $buyerPhoneNumber = $_POST['buyerPhoneNumber'];
        $buyerEmails = $_POST['buyerEmails'];
        $policyDescription = $_POST['policyDescription'];
    }
}
?>

<html>
<head>
    <meta charset="utf-8">
    <title>Marketplace</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Laila:wght@400;700&family=Plus+Jakarta+Sans:wght@200;300;400;600&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="container">
            <!-- <img src="images/wave.svg" alt="white wave background" style="width: 100%;"> -->
            <img src="images/online-shopping.png">
            <div class="top-left"><h1>Welcome to Marketplace!</h1></div>
        </div>
    </header>
    <form class="product-information" id="submitInitial" action="form.php" method="post">
        <!-- NOTE: KEEP IN MIND THE ABOVE PHP PAGE -->
        <h2>Please provide the following product information:</h2>
        <?php
            if (isset($_POST['submitButton']))
            {
                if (isset($error))
                {
                    echo "<p style='color:red;'>"
                    . $error . "</p>";
                }
            }
		?>
        <ol class="information" style="list-style: none;">
            <li>
                <label for="productName">Name:</label>
                <input type="text" id="productName" name="productName" placeholder="" required>
                <span style="color:red;">*</span>
                <!-- NEED TO ADD THE ABOV SPAN LINE TO OTHER LIST OBJECTS -->
            </li>
            <li>
                <label for="productPrice">Price:</label>
                <input type="number" id="productPrice" name="productPrice" placeholder="In USD" required>
            </li>
            <li>
                <label for="productDescription">Description:</label>
                <textarea id="productDescription" name="productDescription" placeholder="" required></textarea>
            </li>
            <li>
                <label for="productDimensions">Dimensions:</label>
                <input type="text" id="productDimensions" name="productDimensions" placeholder="In l x b x h format" required>
                
                <input list="dimensionUnits" id="unitsChoice" name="unitsChoice" placeholder="Dimension unit" required>
                <datalist id="dimensionUnits">
                    <option value="in">
                    <option value="cm">
                    <option value="m">
                    <option value="mm">
                    <option value="ft">
                </datalist> 
            </li>
            <li>
                <label for="productDeliveryTimeStart">Delivery time range:</label>
                <input type="number" id="productDeliveryTimeStart" name="productDeliveryTimeStart" placeholder="Estimated start" required>
                <label for="productDeliveryTimeEnd">to</label>
                <input type="number" id="productDeliveryTimeEnd" name="productDeliveryTimeEnd" placeholder="Estimated end" required>
                
                <input list="deliveryUnits" id="timeChoice" name="timeChoice" placeholder="days/weeks" required>
                <datalist id="deliveryUnits">
                    <option value="days">
                    <option value="weeks">
                </datalist> 
            </li>
            <li>
                <label for="productImage">Product image:</label>
                <input type="file" id="productImage" name="productImage" accept="image/*,video/*" required>
            </li>
            <li>
                <label for="productInventoryCount">Inventory count:</label>
                <input type="number" id="productInventoryCount" name="productInventoryCount" placeholder="" required>
            </li>
        </ol>
    <!-- </form>
    <form class="buyer-policy-information"> -->
        <!-- NOTE: THIS IS NOT LINKED TO ANY PHP PAGE -->
        <h2>Now, please provide your information:</h2>
        <section>
            <ol class="information" style="list-style: none;">
                <li>
                    <label for="buyerName">Full name:</label>
                    <input type="text" id="buyerName" name="buyerName" placeholder="Firstname Lastname" required>
                </li>
                <li>
                    <label for="buyerPhoneNumber">Phone number:</label>
                    <input type="tel" id="buyerPhoneNumber" name="buyerPhoneNumber" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                </li>
                <li>
                    <label for="buyerEmails">Email:</label>
                    <input type="email" id="buyerEmails" name="buyerEmails" required>
                </li>
                <li>
                    <label for="policyDescription">Refund and exchange policy:</label>
                    <textarea id="policyDescription" name="policyDescription" placeholder="" required></textarea>
                </li>
                
            </ol>
        </section> 
        <input type="submit" value="Submit" onclick="submitForm()" class="button" name="submitButton">   
    </form>
    <!-- <script src="js/index.js" defer></script> -->
</body>
<footer>

</footer>
</html>