<!DOCTYPE html>
<html>
<head>
	<title>Successful</title>
	<style>
		body{
			background-image: url("done.png");
		}
		 .click{
		    width: 20px;
			background-color: #071a3d;
			color: white;
			font-size: 25px;
		}
		.click:hover{
			background-color: black
			-webkit-animation: glow 1s ease-in-out infinite alternate;
  			-moz-animation: glow 1s ease-in-out infinite alternate;
  			animation: glow 1s ease-in-out infinite alternate;

		}
        .container{
			width: 400px;
			padding-left: 450px;
			font-size:90px;
		}
		.container input{
			width:100%;
			clear: both;
			font-size: 70px;
		}
    	
		h2{
      		font-size: 50px;
      		text-align: center;
      		color: black;
    	}
		
	</style>
</head>
<body>
	
  
	<?php include 'connection.php' ?>
	
	<?php 
	$sender_name1 = $_POST["sender_name1"];
	$receiver_name1 = $_POST["receiver_name1"];
	$amount = $_POST["amount"];
	
	?>
	<br>
	<h2 style="font-family:Teko; color: #e7eff6; font-size: 50px">Amount of <?php echo$amount ?> has been successfully transferred from <?php echo $sender_name1 ?> to <?php echo $receiver_name1 ?></h2>
	<!-- <h2 h2 style="font-family:Teko; color: #e7eff6">For an amount of   <u><?php echo$amount ?></u> </h2> -->
	<div style = "position:relative; left:625px; top:25px;">
	<a href="transaction.php"><img src="Checkbutton.png"  style="width:220px; height:95px" title="Click here to check transaction history" alt="Send Money"></a>
	</div>

</body>
</html>