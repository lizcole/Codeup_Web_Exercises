<?php

var_dump($_GET);
var_dump($_POST);

?>

<html>

<head>

	<title>My First Form</title>

</head>

<body>

	<h1>Username and Password Please:</h1>

	<form method="POST" action="/my_first_form.php">
		<p>	
       	 	<label for="username">Username</label>
       	 	<input id="username" name="username" type="text">
    	</p>
    	<p>
        	<label for="password">Password</label>
        	<input id="password" name="password" type="password">
    	</p>
    	<p>
        	<input type="submit">
    	</p>
    </form>
	
	<h2>Lets Write an Email:</h2>

	<form method="GET" action="my_first_form.php">
		<p>
			<label for="To">To</label>
			<input id="To" name="To" type="text">
		</p>
		<p>
			<label for="From">From</label>
			<input id="From" name="From" type="text">
		</p>
		<p>
			<label for="compose_email">Message</label>
			<textarea id="compose_email" name="compose_email" rows="5" columns="40"></textarea> 
		</p>
		<p>
			<label>
				<input type="checkbox" id="save_email" name="save_email" value="Yes" checked>
				Save to sent folder?
			</label>
			
		</p>
		<p>
			<button type="submit">Send</button>
		</p>
		
		<h2>Multiple Choice Test</h2>
		
			<form method="POST" action="/my_first_form.php">
				<p>What city do you like the most?</p>
				<p>
					<label>
						<input type="radio" id="q1a" name="q1" value="houston">
						Houston
					</label>	
				</p>
				<p>
					<label>
						<input type="radio" id="q1b" name="q1" value="dallas">
						Dallas
					</label>
				</p>
				<p>
					<label>
						<input type="radio" id="q1c" name="q1" value="austin">
						Austin
					</label>
				</p>
				<p>
					<label>
						<input type="radio" id="q1d" name="q1" value="san antonio">
						San Antonio
					</label>
				</p>
				
				<label>
					What are your favorite burgers?
					<select id="burger" name="burger[]" multiple>
						<option value="cheese">Cheeseburger</option>
						<option value="pickles">Burger with pickles</option>
						<option value="ketchup">Burger with ketchup</option>
					</select>
					</label>
			</form>
		<h2>Select Testing</h2>
			<form method="POST" action="/my_first_form.php">
				<label> Do you like hamburgers?
				<select id="hamburgers" name="hamburgers">
					<option value="1">Yes</option>
					<option value="0">No</option>
				</select>
				</label>


			</form>

</body>

</html>
















