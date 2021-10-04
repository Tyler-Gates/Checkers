<?php

    require('profileConnect.php');
    session_start();

    // If the user is not logged in (meaning they logged out) redirect to the login page...
        if (!isset($_SESSION['loggedin'])) {
	    header('Location: index.php');
	    exit;
    }
    

?>


<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Profile Page</title>
    <link rel="stylesheet" href="libs/css/bootstrap.min.css">
    <link rel="stylesheet" href="libs/style.css">
  </head>
  <style>
  
  input[type=text] {
    width: auto;
    padding: 12px 20px;
    margin: auto;
    display: block;
    background: #f1f1f1;
    border: 1px solid #ccc;
    box-sizing: border-box;
    height: 30px;
    }
  
    body {
        background-color: #ffffff;
        font-family: Comic Sans MS, Helvetica, sans-serif;
        margin: 50px 50px;
    }
    
    
    .container {
           
            text-align: center;
    }
  
    
    /* Padding so the border box is not touching Username... */
    .container2 {
        background: #e1e1e1;
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

    h1.headeralign {
        text-align: center;
    }
    
    h3.headeralign {
        text-align: center;
    }
  
   /* Style the top navigation bar */
    .navbar {
        overflow: hidden;
        background-color: #333;
    }

        /* Style the navigation bar links */
    .navbar a {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }
        
        /* Right-aligned link */
    .navbar a.right {
        float: right;
    }

        /* Change color on hover */
    .navbar a:hover {
        background-color: #ddd;
        color: black;
    }
    
    /* Overwrite default styles of hr */
    hr {
        border: 1px solid #000000;
        margin-bottom: 25px;
    }
        
  
        /* Extra padding */
    .extracontainer {
        background: #ffffff;
        padding: 20px;
         text-align: center;
    }
    
    .extracontainer2 {
        background: #e1e1e1;
        padding: 20px;
         text-align: center;
    }
    
    .input-group {
        margin-top:20px;
        width:60%;
        display:flex;
        justify-content:space-between;
        flex-wrap:wrap;
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
    
    h5.fontSize {
        
        
        font-size: 20px;
        
    }
</style>
<body>
    <h1 class = "headeralign">Checker's Profile Page!</h1>
    
      <div class="container">
        <div class="navbar">
            <a href="HomePage.php" >Click To Play!</a>
            <a href="RulesPage.html" >Rules</a>
            <!-- When user logs out goes to login screen  -->
            <a href="logout.php" class = "right"> Logout</a>
        </div>
        

            <div class = "extracontainer">
            </div>
            
            <div class = "container">
                <!-- Greet user by username --> 
                <div class = "container2">
                    <h3 class = "headeralign">Welcome <?php echo $_SESSION['username']; ?>!</h3>
                         <h4 class = "">Information Blank? <button type="submit"><a href = "profiles.php" >Create Profile</a></button></h4>
                   
                            <div class = "input-group">
                            <label for="fullname"><b>Name (or Nickname): </b></label>
                                <div class = "alignright">
                                    <h5 class = "fontSize">  <?php echo $_SESSION['fullname']; ?></h5>
                                </div>
                            </div>

                            <div class = "input-group">
                            <label for="hobbies"><b>Hobbies: </b></label>
                                <div class = "alignright">
                                    <h5 class = "fontSize">  <?php echo $_SESSION['hobbies']; ?></h5>
                                </div>
                            </div>
    
                            <div class = "input-group">
                            <label for="scale"><b>How good of a checkers player would you say you are? </b></label>
                                <div class = "alignright">
                                    <h5 class = "fontSize">  <?php echo $_SESSION['scale']; ?></h5>
                                </div>
                            </div>
                            
                </div>



                    

        
            </div>
    </div>   
  </body>
</html>