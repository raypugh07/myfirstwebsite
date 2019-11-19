<html>
	<head>
		<title>My first PHP website</title>
	</head>
	<body>
		<h2>Registration Page</h2>
		<a href="index.php">Click here to go back</a><br/><br/>
		<form action="register.php" method='post'>
			Enter Username: <input type="text" name="username" required="required"></input> <br/><br/>
			Enter Password: <input type="password" name="password" required="required"> </input><br/>
			<input type="submit" name='submit' value="Register"/>
		</form>
	</body>
</html>
 
 
<?php  // fix to data being sent blank...not much information online due to mysql no longer working for php 7 must convert to sqli

if(isset($_POST['submit']) )
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $mysqli = mysqli_connect("localhost", "root", ""); //connects to server
    mysqli_select_db($mysqli,"first_db"); //connects to database
    $order = "INSERT INTO users (username,password) VALUES ('$username', '$password')"; //inserts into table
    $result = mysqli_query($mysqli,$order);
    if ($result) {
        echo "<p>Success</p>";
    } else {
        echo "<p>Failed</p>";
    }
}
else
{
    echo "<p>Failed</p>";

}
?>