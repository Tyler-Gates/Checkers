<?php
session_start();
?>

<head>
<style>
body {font-family: Comic Sans MS, Helvetica, sans-serif; background: #787878;}
form {border: 5px solid #000000; border-radius: 25px; background: #ffffff}

/* Padding so the border box is not touching Username... */
.theBigContainer {
  background: #787878;
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: auto;
  min-height: 100%;
  padding: 20px;
  text-align: center;
  border-radius: 50px;
}

/* Add padding to containers */
.container {
  padding: 16px;
  text-align: center;
}

/* Extra padding between password, username, and corfirming */
.extracontainer {
  padding: 16px;
  text-align: center;
}	

/* Full-width input fields */
input[type=text], input[type=password] {
  width: auto;
  padding: 12px 20px;
  margin: auto;
  display:block;
  border: none;
  background: #f1f1f1;
  height: 30px;
  box-sizing: border-box;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #000000;
  margin-bottom: 25px;
}


/* Set a style for the submit/register button */
.registerbtn {
  background-color: #45BFBD;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  cursor: pointer;
  width: auto;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 0.8;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
  border-radius: 0px 0px 25px 25px;
}

</style>
</head>

<body>
    <div class = "theBigContainer">
        <form action="connect.php" method = "post">
    
            <div class = "container">
                <h1>Register</h1>
                <p>Please fill in this form to create an account to play checkers!</p>
                <hr>
    
                <div>
                   <!--
                   Adding error message if there is problems with password/confirm password not being same
                    -->
                    <?php
                        if(isset($_SESSION["error1"])){
    
                          $error1 = $_SESSION["error1"];
                    ?> 
                          <img src="errorPassword.png" class="avatar" width = "300" height = "50">
                    <?php
                    }
                    ?>
     
                    <!--
                    Adding error message if there is problems with email exisiting
                    -->
                    <?php
                        if(isset($_SESSION["error2"])){
    
                          $error2 = $_SESSION["error2"];
                    ?> 
                          <img src="error.png" class="avatar" width = "300" height = "50">
                  
                  <?php
                   }
                  ?>
    
                  <!--
                  This is extra space between the username and the password 
                  -->
                 <div class="extracontainer">
                 </div>
                 
                 </div>
     
     
                <label for="email"><b>Email</b></label>
                <input type="text" placeholder="Enter Email" name="email" id="email" required>
	
               <!--
                This is extra space between the username and the password 
                -->
                <div class="extracontainer">
                </div>


                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" id="username" required>

                 <!--
                This is extra space between the username and the password 
                -->
                <div class="extracontainer">
                </div>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" id="password" required>

                <div class="extracontainer">
                </div>


                <label for="confirm_password"><b>Confirm Password</b></label>
                <input type="password" placeholder="Confirm Password" name="confirm_password" id="confirm_password" required>

                <div class="extracontainer">
                </div>
    
                <button type="submit" class="registerbtn">Register</button>
          </div>


          <div class="container signin">
            <p>Already have an account? <a href="index.php">Sign in</a>.</p>
          </div>

        </form>

		
    </div>
</body>
</html>

<?php
    unset($_SESSION["error1"]);
?>	

<?php
    unset($_SESSION["error2"]);
?>
		