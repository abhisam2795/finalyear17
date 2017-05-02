
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
	<h1>REGISTER</h1>
	</div> 
    
	<div id ="ContentLeft"></div>
        <h2>ENTER THE DETAILS</h2>
	<div id ="ContentRight">
	
<div id="Footer"></div>
</div>

<?php
if(isset($_POST['user']))
{   $user = $_POST['user'];
    $pass = $_POST['pass'];
    $name = $_POST['nam'];
    $address = $_POST['add'];
    $phone = $_POST['ph'];
    $balance = $_POST['bal'];
    
    
    $con = new mysqli("localhost","root","","ab");
    $sql = "INSERT INTO user (Username, Password, Name, Address, Balance, Phone)
    VALUES ('$user', '$pass', '$name','$address','$balance','$phone')";
    if ($con->query($sql) === TRUE) 
    {
        echo "New records created successfully";
        
    }
    else 
    {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
} 
if(isset($_POST['back']))
{
    header("Location: index.php");
}
        echo "<form method = 'post'>
            <div class='col-md-offset-3 col-md-6'> 
            <div class='col-sm-10'>
            Username:<input type = 'text' class='form-control' name = 'user' placeholder = 'Username'><br></div>
            <div class='col-sm-10'>
            Password:<input type = 'password' class='form-control' name = 'pass' placeholder = 'Password'><br></div>
            
            <div class='col-sm-10'>
            Name:<input type = 'text' class='form-control' name = 'nam' placeholder = 'Name'><br></div>
            <div class='col-sm-10'>
            Address:<input type = 'text' class='form-control' name = 'add' placeholder = 'Address'><br></div>
            <div class='col-sm-10'>
            Balance:<input type = 'text' class='form-control' name = 'bal' placeholder = 'Balance'><br></div>
            <div class= 'col-sm-offset-2 col-sm-10'>
            <div class='col-sm-10'>
            Phone:<input type = 'text' class='form-control' name = 'ph' placeholder = 'Phone No'><br></div>
            <input type = 'submit' class='btn btn-default' name = 'new' value = 'LOG IN'> 
            <input type = 'submit' class='btn btn-default' name = 'back' value = 'BACK'>
            </div>
            </div>
            </form>";
            
?>
    </body>
</html> 

