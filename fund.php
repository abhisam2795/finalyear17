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
			<li><a href ="accdetails.php">ACC_DETAILS</a></li>
			<li><a href ="balance.php">BALANCE</a></li>
                        <li><a href ="transaction.php">TRANSACTION</a></li>
                        <li><a href ="change.php">CHANGE PASS </a></li>
                        <li><a href ="index.php">LOG OUT</a></li>
		</ul>
	</nav>
	
<div id="Footer"></div>
</div>

<?php
session_start();
if(isset($_POST['acc']))
{
    header("Location: select.php");
}
if(isset($_POST['in']))
{
    $x = 1;
    $amnt = $_POST['amt'];
    $to = $_POST['in'];
    $dat = $_POST['dt'];
    $from = $_SESSION["new"];
    $t_no = $_SESSION["tra"];
    $t_no = $t_no + $x;
    $_SESSION["tra"] = $t_no;
    $conn = new mysqli("localhost","root","","ab");
    $sql = "INSERT INTO statement (trans_no,tacc_no,amount,dates,facc_no)
    VALUES ('$t_no','$to','$amnt','$dat','$from')";
    if ($conn->query($sql) === TRUE) 
    {
        echo " ";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
    

	$con = mysqli_connect("localhost","root","","ab");
	$sql = "SELECT * FROM user where acc_no = '$to'";
	$result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $updateadd = $row['Balance'];
    $updateadd = $updateadd + $amnt;
    $sql = "UPDATE user SET Balance='$updateadd' where acc_no = '$to'";
    if (mysqli_query($con, $sql)) 
	{
		echo "Record updated successfully";
	} 
	else 
	{
		echo "Error updating record: " . mysqli_error($conn);
	}

    mysqli_close($con);
	$con = mysqli_connect("localhost","root","","ab");
	$sql = "SELECT * FROM user where acc_no = '$from'";
	$result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $updateminus = $row['Balance'];
    $updateminus = $updateminus - $amnt;
    $sql = "UPDATE user SET Balance='$updateminus' where acc_no = '$from'";
    if (mysqli_query($con,$sql)) 
    {
        echo "Transfered Successfully";
    } 
    else 
    {
        echo "Error updating record: " . mysql_error($conn);
    }
    
    
}
        echo "<form method = 'post'>
            
            <form  action = 'test.php' method = 'post'>
            <div class='col-md-offset-3 col-md-6'> 
            <div class='col-sm-10'>
            ACCOUNT NO TO TRANSFER:<input type = 'text' class='form-control' name = 'in' placeholder = 'Account_no'><br></div>
            <div class='col-sm-10'>
            AMOUNT:<input type = 'text' class='form-control' name = 'amt' placeholder = 'AMOUNT'><br></div>
            <div class= 'col-sm-offset-2 col-sm-10'>
            <div class='col-sm-10'>
            DATE:<input type = 'date' class='form-control' name = 'dt' placeholder = 'Date'><br></div>
            <div class= 'col-sm-offset-2 col-sm-10'>
            <input type = 'submit' class='btn btn-default' name = 'new' value = 'TRANSFER'> 
            <input type = 'submit' class='btn btn-default' name = 'back' value = 'BACK'>
            </div>
            </div>
            </form>";
    
?>
</body>
</html>

