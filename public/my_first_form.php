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
			<textarea id="compose_email" name="compose_email"></textarea> 
		</p>
		<p>
			<button type="submit">Send</button>
		</p>

</body>
</html>
















