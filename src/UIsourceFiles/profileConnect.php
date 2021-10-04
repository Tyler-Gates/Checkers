<?php 
    
    session_start();


	$fullname = $_POST['fullname'];
	$hobbies = $_POST['hobbies'];
	$scale = $_POST['scale'];
	$username1 = $_SESSION['username'];
	$user_id = $_POST['id'];



 	if (!empty($fullname) || !empty($hobbies) || !empty($scale)) {
    		$host = "localhost";
    		$dbUsername = "id15018581_profile_pages_info";
    		$dbPassword = "3VP/STmXfP2zjr~j";
    		$dbname = "id15018581_profile_database";

    		//create connection
    		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    		
    		if (mysqli_connect_error()) {
    			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    		} 
		    else {
			            $SELECT = "SELECT username From profileInfo Where username = ? Limit 1";
     			        $INSERT = "INSERT Into profileInfo (hobbies, fullname, scale, username, id) VALUES(?,?,?,?, ?)";
     			        
     		
     		                    $stmt = $conn->prepare($INSERT);
      				            $stmt->bind_param("ssssi", $hobbies, $fullname, $scale, $username1, $user_id);
      				            $stmt->execute();
      				    
      				            $result = mysqli_query($conn, "SELECT * FROM profileInfo WHERE fullname ='$fullname' and hobbies = '$hobbies' and scale = '$scale' and id = '$user_id'")
				                or die("Failed to query database" .mysql_error());
				    
			                    $row = mysqli_fetch_array($result);
      				    
      				        if($row['fullname'] == $fullname && $row['hobbies'] == $hobbies && $row['scale'] == $scale){
      				    	   // creating sessions so information can be accessed in other profile page
                                $_SESSION['username'] = $username1;
                                $_SESSION['hobbies'] = $hobbies;
                                $_SESSION['fullname'] = $fullname;
                                $_SESSION['scale'] = $scale;
                                // Let's HomePage know user is logged in 
      				            $_SESSION['loggedin'] = TRUE;
      				            
      				            header("location: updateProfilePage.php");
      				        }
      				        else {
      				            
      				            //echo "Error, already created profile page.";
      				            header("location: updateProfilePage.php");
      				        }
                    } 
     			         
			          
			     $stmt->close();
     		     $conn->close();
			   
     			
		    }
?> 