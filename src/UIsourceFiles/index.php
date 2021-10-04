<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Comic Sans MS, Helvetica, sans-serif; background: #787878;}
form {border: 5px solid #000000; border-radius: 25px; background: #ffffff}

input[type=text], input[type=password] {
  width: auto;
  padding: 12px 20px;
  margin: auto;
  display: block;
  background: #f1f1f1;
  border: 1px solid #ccc;
  box-sizing: border-box;
  height: 30px;
}

button {
  background-color: #45BFBD;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: auto;
  border: 1px solid #ccc;
}

button:hover {
  opacity: 0.8;
}

h2.headeralign {
	text-align: center;
}

/* Keeps avatar image centered */
.imgcontainer {
  text-align: center;
  background: #ffffff;
  border-radius: 25px;
  padding: 20px;
}

/* When the user would like to minimize the browser */
img.avatar {
 max-width: auto;
 height: auto;
}

/* Padding so the border box is not touching Username... */
.container {
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

/* Extra padding between password and username */
.extracontainer {
  background: #ffffff;
  padding: 2px;
  text-align: center;
}	

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
  padding: 10px;
  border-radius: 0px 0px 25px 25px;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #000000;
  margin-bottom: 25px;
}



</style>
</head>
<body>



<div class = "container">
    <form method="post" action="loginProcess.php">
        <div class = "imgcontainer">
            <img src="loginHeader.png" class="avatar" width = "300" height = "100">
    
            <hr>
            <img src="avatar.png" class="avatar" alt="Avatar" width = "150" height = "150" >
        </div>
     
           <!-- PHP code to display flashy error about username --> 
            <?php 
              if(isset($_SESSION["error"])){
             
                $error = $_SESSION["error"];
            ?> 
                <img src="errorLogin.png" width = "300" height = "50" >
            <?php
            } // ending the if statement from above php code snip 
             ?>  



    <!--
    This is extra space between the username and the password 
    -->
    <div class="extracontainer">
    </div>
    
    <label for="username"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>
 
    <div class="extracontainer">
    </div>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
    <button type="submit">Login</button>
    
    

    
    <div class = "signin">
	<p>Don't have an account? <a href = "newAccount.php">Register here!</a></p>
	</div>
</div>

</form>

</body>
</html>

<?php
    unset($_SESSION["error"]);
?>