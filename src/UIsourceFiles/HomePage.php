<?php 

    session_start();

    // If the user is not logged in (meaning they logged out) redirect to the login page...
        if (!isset($_SESSION['loggedin'])) {
	    header('Location: index.php');
	    exit;
    }
?>


<!DOCTYPE html>
Homepage
<html>
    
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--
    Tyler Gates Add on's for checker board / piece look and functionality
    -->
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="board.css" />
        <script defer src="script.js"></script>
    <!--
    End of add on's
    -->
    <style>
        body {font-family: Comic Sans MS, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

        button {
            background-color: #45BFBD;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: auto;
        }

        block-display button{
            display: block;
            align-content: center;
        }

        button:hover {
            opacity: 0.8;
        }

        h2.headeralign {
            text-align: center;
        }


        .container {
            padding: 16px;
            text-align: center;
        }

        /*
        Centers the checker board
        */
        .center {
          margin-left: auto;
          margin-right: auto;
        }
        
        /* Create two unequal columns that sits next to each other */
        /* Sidebar/left column */
        .side {
            background-color: #f1f1f1;
            padding: 20px;
        }
        
        .header h1 {
            text-align: center;
            font-size: 35px;
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

    </style>
</head>


<body>

<div class = "header">
    <h1>CHECKERS!</h1>
</div>

<!-- Welcomes the user that logs in -->
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>

 <div class="container">
        <div class="navbar">
            <a href="RulesPage.html" >Rules</a>
            <a href="updateProfilePage.html" >Profile Page</a>
            <!-- When user logs out goes to login screen  -->
            <a href="logout.php" class = "right"> Logout</a>
        </div>
        <!-- Changes color of background for this section -->
        <div class = "side">
            <button><a href="HomePage.php">Start game</a></button>
        </div>
  </div>
     <!-- Changes color of background for this section -->
    <div class = "side">
    
    <!-- Travis's Section for the clock -->
        <div id='info' class='hidden'>-</div>
        <p class="redClock"><b>Red Clock</b></p>
        <p class="blackClock"><b>Black Clock</b></p>
        <div id='player1clock'>0</div>
        <div id='player2clock'>0</div>

    <!--
    Checkers Part of HomePage (Tyler Gates Part)
    -->
    <div class="container">
            <table class = "center">
                <tr>
                    <td class="noPieceHere"></td>
                    <td><p class="red-piece" id="0"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="red-piece" id="1"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="red-piece" id="2"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="red-piece" id="3"></p></td>
                </tr>
                <tr>
                    <td><p class="red-piece" id="4"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="red-piece" id="5"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="red-piece" id="6"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="red-piece" id="7"></p></td>
                    <td class="noPieceHere"></td>
                </tr>
                <tr>
                    <td class="noPieceHere"></td>
                    <td><p class="red-piece" id="8"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="red-piece" id="9"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="red-piece" id="10"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="red-piece" id="11"></p></td>
                </tr>
                <tr>
                    <td></td>
                    <td class="noPieceHere"></td>
                    <td></td>
                    <td class="noPieceHere"></td>
                    <td></td>
                    <td class="noPieceHere"></td>
                    <td></td>
                    <td class="noPieceHere"></td>
                </tr>
                <tr>
                    <td class="noPieceHere"></td>
                    <td></td>
                    <td class="noPieceHere"></td>
                    <td></td>
                    <td class="noPieceHere"></td>
                    <td></td>
                    <td class="noPieceHere"></td>
                    <td></td>
                </tr>
                <tr>
                    <td><p class="black-piece" id="12"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="black-piece" id="13"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="black-piece" id="14"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="black-piece" id="15"></p></td>
                    <td class="noPieceHere"></td>
                </tr>
                <tr>
                    <td class="noPieceHere"></td>
                    <td><p class="black-piece" id="16"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="black-piece" id="17"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="black-piece" id="18"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="black-piece" id="19"></p></td>
                </tr>
                <tr>
                    <td><p class="black-piece" id="20"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="black-piece" id="21"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="black-piece" id="22"></p></td>
                    <td class="noPieceHere"></td>
                    <td><p class="black-piece" id="23"></p></td>
                    <td class="noPieceHere"></td>
                </tr>
            </table>
            
            <!-- Scoring for Checker's Game --> 
            <div class="red-turn-text">
                Reds turn
            </div>
            Red Score: <input type="number" readonly id="redS">
            <p id="divider"></p>
            <div class="black-turn-text">
                Blacks turn
            </div>
            Black Score: <input type="number" readonly id="blackS">
            </div>
    </div> <!-- End of div to class = "side" -->



</body>
</html>