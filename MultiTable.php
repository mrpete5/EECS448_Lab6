<style>
table, th, td {
  border: 1px solid black;
  text-align:center;
}
</style>
	<a href="./index.html">Home</a>
	
<?php
	echo("<h1>Lab 6 Exercise 1 - Multiplication Table</h1>");
	echo("<table style=\"width:100%\">");
	
	for ($x=0; $x<=100; $x++){
		echo("<tr>");
		
		for ($y=0; $y<=100; $y++){
			if ($x==0 && $y==0){
				echo("<td style=\"background:lightblue\"></td>");
			}
			else if ($x==0){
				echo("<td style=\"background:lightblue\">" . $y . "</td>");
			}
			else if ($y==0){
				echo("<td style=\"background:lightblue\">" . $x . "</td>");
			}
			else {
				echo("<td>" . $x*$y . "</td>");
			}
		}
		
		echo("</tr>");
	}

    echo("</table>");

?>