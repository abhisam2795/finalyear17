<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/Layout.css" rel="stylesheet" type="text/css" />
<link href="css/Menu.css" rel="stylesheet" type="text/css" />

</head>

<body>
<div id="Holder">	
<div id="NavBar">
	<nav>
		<ul>
			<li><a href ="accdetails.php">ACC_DETAILS</a></li>
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
            print" <p>WELCOME  $acc_no</p>";
     ?>
    </body>
    
</html>

