<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
	<style type="text/css">
		body{
			background-image: url("web.png");
			margin: 0;
			background-size: cover;
		}
		h2{
			text-align: center;
			font-size: 80px;
		}
		
		button{
      		font-size: 30px;
      		padding: 25px 50px;
      		justify-content: center;
      		background-color: #071a3d;
			  color:white;
		}
		a{
      color: white;
      font-size:20px;
    }

    
    .container{
    	padding-left: 625px;

    }
	</style>
	<link rel="stylesheet" type="text/css" href="navstylebar.css">
</head>
<body>
<div id="navbar">
    <a style="font-family:Teko" class="home" href="index.php"><i class="fa fa-home"></i> Home</a>
    <a style="font-family:Teko; position:relative; left:220px" class="bye" href="table.php"><i class="fa fa-list"></i> User List</a>
    <a style="font-family:Teko; position:relative; left:220px" class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
	<a style="font-family:Teko; position:relative; left:220px" class="bye" href="money.php"><i class="fa fa-repeat"></i> Send Again</a>
    </div>
	<?php include 'connection.php' ?>
	
	<?php 
	$sender_name1 = $_POST["sender_name1"];
	$receiver_name1 = $_POST["receiver_name1"];
	$amount = $_POST["amount"];
	

	 $sql5="SELECT name1,id,balance FROM user WHERE name1='$sender_name1'";
	$result5=mysqli_query($conn, $sql5); 
	$row=mysqli_fetch_array($result5) ;
	$money= $row['balance'];

	
	 $sql3 = "SELECT name1,id,balance  FROM user WHERE name1='$receiver_name1' ";
	$result3 = mysqli_query($conn, $sql3); 
    $row=mysqli_fetch_array($result3) ;
	$money1= $row['balance'];

	
	if ($amount < 1){ 
	 	include 'user.php';
	 } 
	elseif ($money < $amount) {
	 	include 'user2.php';
	 	
	 }
    // $query1 = "UPDATE `customer` SET `balance`='".$sum1."' WHERE `userid` = '".$ruserid."'";
	else{
	 	$sql4 = "UPDATE `user` SET `balance`=balance-$amount WHERE `name1`='".$sender_name1."'";
		$sql2= "UPDATE `user` SET `balance`=balance+$amount WHERE `name1`='".$receiver_name1."' ";
 		$result2 = mysqli_query($conn, $sql2); 
 		$result3 = mysqli_query($conn, $sql4);
		$sql7 = "INSERT INTO transaction1( `sender`, `receiver`, `amount`) VALUES ('$sender_name1','$receiver_name1','$amount')";
$query = mysqli_query($conn, $sql7);
 		include 'user1.php';
 		

 	}



	?>
	
	
	

	



</body>
</html>
