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
			<li><a href ="balance.php">BALANCE</a></li>
			<li><a href ="fund.php">TRANSFER FUND</a></li>
                        <li><a href ="transaction.php">TRANSACTION</a></li>
                        <li><a href ="change.php">CHANGE PASS </a></li>
                        <li><a href ="index.php">LOG OUT</a></li>
		</ul>
	</nav>
	
<div id="Footer"></div>
</div>

<?php
session_start();
         $acc_no =  $_SESSION["new"];
            $con = mysqli_connect("localhost","root","","ab");
			$sql = "SELECT * FROM user where acc_no = '$acc_no'";
			$result = mysqli_query($con, $sql);
            if (mysqli_num_rows($result) > 0) 
			{
					// output data of each row
					while($row = mysqli_fetch_assoc($result)) {
                    $expire = time()+60*60*24*30;//1 month
                    $name = $row['Name'];
                    $phone = $row['Phone'];
                    $Address = $row['Address'];
                    $Balance = $row['Balance'];
                    print "<p> Account No is : $acc_no </p>";
                    print "<p>  Name : $name </p>";
                    print "<p> Address is : $Address </p>";
                    print "<p> Phone Number is : $phone </p>";
                    print "<p> Balance is : $Balance </p>";
                    
                    
                    
                }
            }
            if(isset($_POST['acc']))
            {
                header("Location: select.php");
            }
            echo "<form method= 'POST'>
            <center><input type = 'submit' name = 'acc' value = 'BACK'>
            
            </form>";

?>

