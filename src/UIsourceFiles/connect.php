<?php

// With the help of YouTuber Nawaraj Shah
    session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$confirm_password = $_POST['confirm_password'];
	$error1 = "Password and Confirm password should match!";
	$error2 = "This email already exists!";

	if (!empty($username) || !empty($password) || !empty($email) || !empty($confirm_password)) {
    		$host = "localhost";
    		$dbUsername = "id15018581_checkers";
    		$dbPassword = "MA#(oLGuSe(76R)8";
    		$dbname = "id15018581_loginsystemcheckers";

    		//create connection
    		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    		if (mysqli_connect_error()) {
    			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    		} else {
     			$SELECT = "SELECT email From users Where email = ? Limit 1";
     			$INSERT = "INSERT Into users (username, password, email, confirm_password) VALUES (?, ?, ?, ?)";
     			if ($_POST["password"] === $_POST["confirm_password"]) {
     			//Prepare statement
     			$stmt = $conn->prepare($SELECT);
     			$stmt->bind_param("s", $email);
     			$stmt->execute();
     			$stmt->bind_result($email);
     			$stmt->store_result();
    		 	$rnum = $stmt->num_rows;
     			    if ($rnum==0) {
      				    $stmt->close();
      				    $stmt = $conn->prepare($INSERT);
      				    $stmt->bind_param("ssss", $username, $password, $email, $confirm_password);
      				    $stmt->execute();
      				
                        // Directs the certain user to HomePage and welcomes them
                        $_SESSION['username'] = $username;
                        // Let's HomePage know user is logged in 
      				    $_SESSION['loggedin'] = TRUE;
                        header("Location: HomePage.php");
    			    } else {
      				    $_SESSION["error2"] = $error2;
                        header("location: newAccount.php"); //send user back to the register page.
     			    }
     			}
                else {
                         $_SESSION["error1"] = $error1;
                        header("location: newAccount.php"); //send user back to the register page.
                }
     			$stmt->close();
     			$conn->close();
    		}
	} else {
 		echo "All field are required";
 		die();
	}




?>