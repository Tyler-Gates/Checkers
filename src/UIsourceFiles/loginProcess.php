<?php 
    session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$error = "Username or Password is Incorrect!";
	

 	if (!empty($username) || !empty($password)) {
    		$host = "localhost";
    		$dbUsername = "id15018581_checkers";
    		$dbPassword = "MA#(oLGuSe(76R)8";
    		$dbname = "id15018581_loginsystemcheckers";

    		//create connection
    		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    		if (mysqli_connect_error()) {
    			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    		} 
		else {

			$result = mysqli_query($conn, "SELECT * FROM users WHERE username ='$username' and password = '$password'")
				or die("Failed to query database" .mysql_error());
			$row = mysqli_fetch_array($result);
			if ($row['username'] == $username && $row['password'] == $password) {
			
				// Directs the certain user to HomePage and welcomes them
                $_SESSION['username'] = $username;
                // Let's HomePage know user is logged in 
                $_SESSION['loggedin'] = TRUE;
				header("Location: HomePage.php");
			} else {
				$_SESSION["error"] = $error;
                header("location: index.php"); //send user back to the login page.
			} 
		}
}
	


?> 