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
<div id="NavBar">
	<nav>
		<ul>
                        <li><a href ="select.php">HOME</a></li>
			<li><a href ="accdetails.php">ACCOUNT_DETAILS</a></li>
			<li><a href ="balance.php">BALANCE</a></li>
			<li><a href ="fund.php">TRANSFER FUND</a></li>
                        <li><a href ="transaction.php">TRANSACTION</a></li>
                        <li><a href ="index.php">LOG OUT</a></li>
		</ul>
	</nav>
	
<div id="Footer"></div>
</div>
    <body>
<?php
session_start();
    if(isset($_POST['new']))
    {
        $pass = $_POST['pass'];
        $acc = $_SESSION["new"];
        $old = $_POST['user'];
        $con = mysqli_connect("localhost","root","","ab");
        $sql = "SELECT * FROM user where acc_no = '$acc'";
		$result = mysqli_query($con, $sql);
		$row = mysqli_fetch_assoc($result);
        if($old === $row['Password'])
        {$sql = "UPDATE user SET Password='$pass' where acc_no = '$acc'";
        if (mysqli_query($con,$sql)) 
        {
            header("Location: bal.php");
        } 
        else 
        {
            echo "Error updating record: " . mysql_error($con);
        }
        }
        else
        {
            echo "Incorrect password";
        }
        mysqli_close($con);
    }
    echo"
        <form method = 'post'>
            <div class='col-md-offset-3 col-md-6'> 
            <div class='col-sm-10'>
            Enter Old pass:<input type = 'Password' class='form-control' name = 'user'><br></div>
            <div class='col-sm-10'>
            Enter new pass:<input type = 'password' class='form-control' name = 'pass'><br></div>
            <div class= 'col-sm-offset-2 col-sm-10'>
            <input type = 'submit' class='btn btn-default' name = 'new' value = 'CONFIRM'>
            </div>
            </div>
            </form>"
?>
</body>
</html>

