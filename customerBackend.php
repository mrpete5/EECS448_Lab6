<html>
  <head>
	<link rel="stylesheet" href="./style.css">
	
	<title>Web Store - Lab 6</title>
	<h1>Lab 6 Exercise 3 - Web Store</h1>
    
  </head>
  <body>
		<a href="./index.html">Home</a>
		<?php
			$email = $_POST['email'];
			$password = $_POST['password'];
			$footballQuantity = $_POST['football'];
			$bananaQuantity = $_POST['banana'];
			$toothpasteQuantity = $_POST['toothpaste'];
			$shippingType = $_POST['shipping'];
			if ($shippingType == 'free')
			{
				$shippingCost = 0;
			}			
			if ($shippingType == 'overnight')
			{
				$shippingCost = 50;
			}			
			if ($shippingType == '3day')
			{
				$shippingCost = 5;
			}
			$totalCost = $shippingCost + ($footballQuantity*27) + ($bananaQuantity*1) + ($toothpasteQuantity*4);
			
			echo("<div class=\"purchase\">");
				echo("<p>Purchase summary for " . $email . "</p>");
				echo("<p>Your password is " . $password . "</p>");
				echo("<div class=\"receipt\">");
					echo("<table>");
						echo("<tr>");
							echo("<th style=\"background-color:lightgreen;\"></th>");
							echo("<th style=\"background-color:lightgreen;\">Quantity</th>");
							echo("<th style=\"background-color:lightgreen;\">Cost Per Item</th>");
							echo("<th style=\"background-color:lightgreen;\">Sub Total</th>");
						echo("</tr>");
						echo("<tr>");
							echo("<td style=\"background-color:lightgreen;\"><b>Football</b></td>");
							echo("<td style=\"background-color:violet;\">" . $footballQuantity . "</td>");
							echo("<td style=\"background-color:violet;\">$27</td>");
							echo("<td style=\"background-color:violet;\">$" . ($footballQuantity*27) . "</td>");
						echo("</tr>");
						echo("<tr>");
							echo("<td style=\"background-color:lightgreen;\"><b>Banana</b></td>");
							echo("<td style=\"background-color:violet;\">" . $bananaQuantity . "</td>");
							echo("<td style=\"background-color:violet;\">$1</td>");
							echo("<td style=\"background-color:violet;\">$" . ($bananaQuantity*1) . "</td>");
						echo("</tr>");
						echo("<tr>");
							echo("<td style=\"background-color:lightgreen;\"><b>Toothpaste</b></td>");
							echo("<td style=\"background-color:violet;\">" . $toothpasteQuantity . "</td>");
							echo("<td style=\"background-color:violet;\">$4</td>");
							echo("<td style=\"background-color:violet;\">$" . ($toothpasteQuantity*4) . "</td>");
						echo("</tr>");
						echo("<tr>");
							echo("<td style=\"background-color:lightgreen;\"><b>Shipping</b></td>");
							echo("<td colspan=\"2\" style=\"background-color:violet;\">");
								if ($shippingType == 'free')
								{
									echo("Free 7 day");
								}			
								if ($shippingType == 'overnight')
								{
									echo("$50 over night");
								}			
								if ($shippingType == '3day')
								{
									echo("$5 three day");
								}
							echo("<td style=\"background-color:violet;\">$" . $shippingCost . "</td>");
						echo("</tr>");
						echo("<tr>");
							echo("<td colspan=\"3\" style=\"background-color:lightgreen;\"><b>Total Cost</b></td>");
							echo("<td style=\"background-color:lightgreen;\"><b>$" . $totalCost . "</b></td>");
						echo("</tr>");
					echo("</table>");	
				echo("</div>");
				
				echo("<div class=\"purchaseSummary\">");
					if ($footballQuantity > 0)
					{ 
						echo("<img src=\"picture/football.jpeg\" width=\"150\" height=\"100\"></a>" . "x " . $footballQuantity . "<br>");
					}
					if ($bananaQuantity > 0)
					{ 
						echo("<img src=\"picture/banana.jpeg\" width=\"150\" height=\"100\"></a>" . "x " . $bananaQuantity . "<br>");
					}
					if ($toothpasteQuantity > 0)
					{ 
						echo("<img src=\"picture/toothpaste.jpeg\" width=\"150\" height=\"100\"></a>" . "x " . $toothpasteQuantity . "<br>");
					}
				echo("</div>");
				
			echo("</div>");
		?>
		

  </body>
</html>