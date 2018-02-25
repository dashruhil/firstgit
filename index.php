 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login Here</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 5rem;
			background-image: url(images/back.jpg);
        }

        .starter-template {
            padding: 3rem 1.5rem;
            text-align: center;
        }
		input[type=text], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
		input[type=password], select {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
			
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
	display: block;
}

input[type=submit]:hover {
    background-color: #45a049;
}
		div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
		span {
    display: block;
}
    </style>
	<body>
	<center><h1>Login</h1></center>
		<p> <a href="index.php">Login Here</a></p>
	
	<div class="container">
	<h3>Login Form</h3>
	<form action="member.php " method="POST">
		<span><label>Username:</label></span><input type="text" name="user" placeholder="Enter Username" required><br/>
		<span><label>Password:</label></span><input type="password" name="pass" placeholder="Enter Password" required><br/>
		<div class="checkbox">
      <label><input type="checkbox"> Remember me</label>
    </div>
		<input type="submit" value="Login" name="Submit" />
		</form></div>
		</body>
	</head></html>