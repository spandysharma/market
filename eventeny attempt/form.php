
<?php
    include "index.php";
    // $firstname = $_POST['firstname'];
	if(isset($_POST['submitButton']))
	{
		if(!isset($error))
		{
				echo"<h1>INPUT RECEIVED</h1><br>";
				echo "<table border='1'>";
				echo "<thead>";
				echo "<th>Parameter</th>";
				echo "<th>Value</th>";
				echo "</thead>";
				echo "<tr>";
				echo "<td>Product Name</td>";
				echo "<td>".$productName."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Product Price</td>";
				echo "<td>".$productPrice."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Product description</td>";
				echo "<td>".$productDescription."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Product Dimensions</td>";
				echo "<td>" .$productDimensions."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Units Choice</td>";
				echo "<td>".$unitsChoice."</td>";
				echo "</tr>";
				echo "<tr>";
				echo "<td>Product Delivery Time Start   </td>";
				echo "<td>".$productDeliveryTimeStart."</td>";
				echo "</tr>";
                echo "<tr>";
                echo "<td>Product Delivery Time End     </td>";
                echo "<td>".$productDeliveryTimeEnd."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Days/Weeks</td>";
                echo "<td>".$timeChoice."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Product Image</td>";
                echo "<td>".$productImage."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Product Inventory Count</td>";
                echo "<td>".$productInventoryCount."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Buyer Name</td>";
                echo "<td>".$buyerName."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Buyer Phone Number Name</td>";
                echo "<td>".$buyerPhoneNumber."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Buyer Email</td>";
                echo "<td>".$buyerEmails."</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>Policy Description/td>";
                echo "<td>".$policyDescription."</td>";
                echo "</tr>";
				echo "</table>";
		}
	}
?>

<!-- echo "<tr>";
echo "<td>First Name</td>";
echo "<td>".$firstname."</td>";
echo "</tr>"; -->