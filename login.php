
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/Layout.css" rel="stylesheet" type="text/css" />
<link href="css/Menu.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div id="Holder">
<div id="Holder">
 <nav class="NavBar NavBar-inverse navbar-fixed-top">
 <div class="container">
 <div class="NavBar-header">
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>   
                      </button>
        </div>
	<nav>
            <ul>
                        <li><a href ="index.php">Home</a></li>
			<li><a href ="login.php">Login</a></li>
                        <li><a href ="sign.php">Register</a></li>
                       
		</ul>
	</nav>		
</div>
 </nav>
<div id="Content">
	<div id ="PageHeading"></div>
	<h1>LOG IN</h1>
	</div> 
    
	<div id ="ContentLeft"></div>
        <h2>ENTER USER NAME AND PASSWORD</h2>
	<div id ="ContentRight">
	
<div id="Footer"></div>
</div>
<?php

        echo "
            <form  action = 'test.php' method = 'post'>
            <div class='col-md-offset-3 col-md-6'> 
            <div class='col-sm-10'>
            Username:<input type = 'text' class='form-control' name = 'user' placeholder = 'Username'><br></div>
            <div class='col-sm-10'>
            Password:<input type = 'password' class='form-control' name = 'pass' placeholder = 'Password'><br></div>
            <div class= 'col-sm-offset-2 col-sm-10'>
            <input type = 'submit' class='btn btn-default' name = 'new' value = 'LOG IN'> 
            <input type = 'submit' class='btn btn-default' name = 'back' value = 'BACK'>
            </div>
            </div>
            </form>";
?>
    </body>
</html>
