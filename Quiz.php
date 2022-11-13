<html>
  <head>
    <h1>Lab 6 Exercise 2 - Quiz Creation</h1>
  </head>
  <body>	
	<a href="./index.html">Home</a>
	<div class="container">
		<form action="Quiz.php" method="post">
			<div class="form-group"> 
				<h3>Question 1: Which programming language was created first?</h3>
					<?php
						echo("<p>Correct Answer: Python</p>");
						if($_POST['q1'] == 1) 
						{ 
							echo("<p style=\"color: red\">Your Answer: PHP</p>");
						}
						if($_POST['q1'] == 2) 
						{ 
							echo("<p style=\"color: red\">Your Answer: Java</p>");
						}
						if($_POST['q1'] == 3) 
						{ 
							echo("<p style=\"color: green\">Your Answer: Python</p>");
						}
						if($_POST['q1'] == 4) 
						{ 
							echo("<p style=\"color: red\">Your Answer: Ruby</p>");
						}
					?>
			</div>		
					<br/>
			<div class="form-group"> 
				<h3>Question 2: Where will the 2024 Summer Olympics take place?</h3>
					<?php
						echo("<p>Correct Answer: Paris, France</p>");
						if($_POST['q2'] == 1) 
						{ 
							echo("<p style=\"color: green\">Your Answer: Paris, France</p>");
						}
						if($_POST['q2'] == 2) 
						{ 
							echo("<p style=\"color: red\">Your Answer: Barcelona, Spain</p>");
						}
						if($_POST['q2'] == 3) 
						{ 
							echo("<p style=\"color: red\">Your Answer: Sydney, Australia</p>");
						}
						if($_POST['q2'] == 4) 
						{ 
							echo("<p style=\"color: red\">Your Answer: Beijing, China</p>");
						}
					?>
			</div>
					</br>
			<div class="form-group"> 
				<h3>Question 3: What year was Taco Bell founded?</h3>
					<?php
						echo("<p>Correct Answer: 1962</p>");
						if($_POST['q3'] == 1) 
						{ 
							echo("<p style=\"color: red\">Your Answer:1956</p>");
						}
						if($_POST['q3'] == 2) 
						{ 
							echo("<p style=\"color: green\">Your Answer: 1962</p>");
						}
						if($_POST['q3'] == 3) 
						{ 
							echo("<p style=\"color: red\">Your Answer: 1971</p>");
						}
						if($_POST['q3'] == 4) 
						{ 
							echo("<p style=\"color: red\">Your Answer: 1977</p>");
						}
					?>
			</div>
					<br/>
			<div class="form-group"> 
				<h3>Question 4: How many NCAA national championships have the KU men's basketball team won?</h3>
					<?php
						echo("<p>Correct Answer: 4</p>");
						if($_POST['q4'] == 1) 
						{ 
							echo("<p style=\"color: red\">Your Answer: 3</p>");
						}
						if($_POST['q4'] == 2) 
						{ 
							echo("<p style=\"color: green\">Your Answer: 4</p>");
						}
						if($_POST['q4'] == 3) 
						{ 
							echo("<p style=\"color: red\">Your Answer: 5</p>");
						}
						if($_POST['q4'] == 4) 
						{ 
							echo("<p style=\"color: red\">Your Answer: 6</p>");
						}
					?>
			</div>
					<br/>
			<div class="form-group"> 
				<h3>Question 5: Which film won Best Picture at the 1995 Academy Awards?</h3>
					<?php
						echo("<p>Correct Answer: Forrest Gump</p>");
						if($_POST['q5'] == 1) 
						{ 
							echo("<p style=\"color: red\">Your Answer: Four Weddings and a Funeral</p>");
						}
						if($_POST['q5'] == 2) 
						{ 
							echo("<p style=\"color: red\">Your Answer: Pulp Fiction</p>");
						}
						if($_POST['q5'] == 3) 
						{ 
							echo("<p style=\"color: red\">Your Answer: The Shawshank Redemption</p>");
						}
						if($_POST['q5'] == 4) 
						{ 
							echo("<p style=\"color: green\">Your Answer: Forrest Gump</p>");
						}
					?>
			</div>		
					<br/>


			<?php 
				if($_POST['submit'])
				{

					if( $_POST['q1'] == '' || $_POST['q2'] == '' || $_POST['q3'] ==' ' || $_POST['q4'] == '' || $_POST['q5'] == '' )
					{
						echo("<input id=\"submit\" type=\"submit\" value=\"Answer all questions before submitting.\" name=\"submit\"/>");
					}

					else 
					{
						$score = 0;
						$amt = 0;

						if($_POST['q1'] == 3) 
						{ // answer 3 is correct
							$score += 20;
							$amt++;
						}

						if($_POST['q2'] == 1) 
						{ // answer 1 is correct
							$score += 20;
							$amt++;
						}

						if($_POST['q3'] == 2) 
						{ // answer 2 is correct
							$score += 20;
							$amt++;
						}

						if($_POST['q4'] == 2) 
						{ // answer 2 is correct
							$score += 20;
							$amt++;
						}

						if($_POST['q5'] == 4) 
						{ // answer 4 is correct
							$score += 20;
							$amt++;
						}
						
						echo("<h2> You correctly answered " . $amt . "/5 for " . $score . "%" . "</h2>");
					}
				}
			?>
		</form>
	</div>	
  </body>
</html>