<!DOCTYPE html>
<html>
	<head>
		<title>Confirmation</title>
	</head>
	<body>
		<?php
			include "index.php";
			// $firstname = $_POST['firstname'];
			$conn = mysqli_connect("localhost", "root", "", "products");
				
			// Check connection
			if($conn === false){
				die("ERROR: Could not connect. "
					. mysqli_connect_error());
			}

			// Taking all values from the form data(input)
			$productName = $_REQUEST['productName'];
			$productPrice = $_REQUEST['productPrice'];
			$productDescription = $_REQUEST['productDescription'];
			$productDimensions = $_REQUEST['productDimensions'];
			$unitsChoice = $_REQUEST['unitsChoice'];
			$productDeliveryTimeStart = $_REQUEST['productDeliveryTimeStart'];
			$productDeliveryTimeEnd = $_REQUEST['productDeliveryTimeEnd'];
			$timeChoice = $_REQUEST['timeChoice'];
			$productImage = $_REQUEST['productImage'];
			$productInventoryCount = $_REQUEST['productInventoryCount'];
			$buyerName = $_REQUEST['buyerName'];
			$buyerPhoneNumber = $_REQUEST['buyerPhoneNumber'];
			$buyerEmails = $_REQUEST['buyerEmails'];
			$policyDescription = $_REQUEST['policyDescription'];
			$productId = $_REQUEST['productId'];

			// Performing insert query execution
			// here our table name is productsinformation
			$sql = "INSERT INTO productsinformation  VALUES ('$productName',
				'$productPrice','$productDescription','$productDimensions',
				'$unitsChoice','$productDeliveryTimeStart','$productDeliveryTimeEnd',
				'$timeChoice','$productImage','$productInventoryCount','$buyerName',
				'$buyerPhoneNumber','$buyerEmails','$policyDescription','$productId')";
				
			if(mysqli_query($conn, $sql)){
				echo "<h3>Your product information has been stored successfully.</h3>";
				// CONFIRMATION NUMBER ---------------------
				echo nl2br("\n$productName\n $productPrice\n "
					. "$productDescription\n $productDimensions\n $unitsChoice \n"
					. "$productDeliveryTimeStart\n $productDeliveryTimeEnd\n "
					. "$timeChoice\n $productImage\n $productInventoryCount\n $buyerName\n "
					. "$buyerPhoneNumber\n $buyerEmails\n $policyDescription\n $productId");
			} else{
				echo "ERROR: Hush! Sorry $sql. "
					. mysqli_error($conn);
			}
				
			// Close connection
			mysqli_close($conn);
		?>
	</body>
</html>