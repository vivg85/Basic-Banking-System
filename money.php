<?php
	session_start();
  $connect = mysqli_connect("localhost", "root", "", "test");
?> 
<!DOCTYPE html>
<html>
<head><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>send money</title>
	<style type="text/css">
		form{
			font-size: 40px;
			font-weight:30px;
			text-align: center;
			margin: auto;
			padding-top: 80px;
			color: white;
		}
		label{
			padding-top: 20px;
			justify-content: left;
			font-weight: 100px;
			
		}
		.container{
			width: 500px;
			
			padding-left: 400px;
			
		}
		.container input{
			width:90%;
			clear: both;
			height: 35px;
			border: 50px;
			color:black;
		}
		button{
			font-size: 30px;
      		padding: 50px 10px;
      		background-color: #071a3d; 
			color: white;
			margin-left: 700px;
		}
		

		
		.press{
			padding-top: 50px;
			padding-left: 750px;
			margin-left: 700px;
		}
		body{
			background-image: url("Send1.png");
			margin: 0;
			background-repeat: no-repeat;
			background-size: cover;
		}
		.click{
			width: 330px;
			background-color: #2a4d69;
			color: #e7eff6;
			border-radius: 45px;
			font-size: 40px;
			margin-left: 487px;
			transition: 0.3s;
			margin-top:32px;
			height:60px;
		}
		
		.click:hover{
			background-color: #008744 ;	
		}
		a{
      color: white;
      font-size:20px;
    	}
		.footer {
     position: fixed;
     left: 0;
     bottom: 0;
     width: 100%;
     background-color: #071a3d;
     color: white;
     text-align: center;
     margin-bottom:0px;
        }
	</style>
  <link rel="stylesheet" type="text/css" href="navstylebar.css">
</head>
<body>
<div id="navbar">
  <a style="font-family:Teko" class="home" href="index.php"><i class="fa fa-home"></i> Home</a>
  <a style="font-family:Teko; position:relative; left:370px" class="bye" href="table.php"><i class="fa fa-list"></i> User List</a>
  <a style="font-family:Teko; position:relative; left:370px" class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  <!-- <a style="font-family:Teko" class="bye" href="money.php"><i class="fa fa-money"></i> Transfer Money</a> -->
  </div>

	<div class="container">
		<form action="transfer.php" method="post">
			<label style="font-family:Teko" ><b>SENDER</b></label>
			<input style="font-family:Doppio One"list="names" id="sender_name1" type="text" name="sender_name1", placeholder="Enter name here" required>
			<datalist id="names">
				<option value="Vivek Goswami"></option>
				<option value="Husky"></option>
				<option value="Ragdoll"></option>
				<option value="Munchkin Cat"></option>
				<option value="Shibe"></option>
				<option value="Samoyed"></option>
				<option value="Norwegian Forest"></option>
				<option value="Golden British Shorthair"></option>
				<option value="Golden Retriever"></option>
				<option value="Alaskan Malamute"></option>
				
			</datalist>
		</br>
		<br>
			<label style="font-family:Teko"><b>RECIEVER</b></label>
			<input style="font-family:Doppio One" list="namess" type="" id="receiver_name1" name="receiver_name1" placeholder="Enter name here"  required>
			<datalist id="namess">
                <option value="Vivek Goswami"></option>
				<option value="Husky"></option>
				<option value="Ragdoll"></option>
				<option value="Munchkin Cat"></option>
				<option value="Shibe"></option>
				<option value="Samoyed"></option>
				<option value="Norwegian Forest"></option>
				<option value="Golden British Shorthair"></option>
				<option value="Golden Retriever"></option>
				<option value="Alaskan Malamute"></option>
			</datalist>
		</br>
		<br>
			<label style="font-family:Teko"><b>AMOUNT</b></label>
			<input style="font-family:Doppio One" type="number" id="amount" name="amount" placeholder="Enter amount here" required></div>
			<input style="font-family:Teko" class="click" type="submit" name="" value="Send">
		</form>
	
	<div class="footer">
  <marquee behavior="scroll" direction="left">
  <p style="font-family:Teko">Made By | Vivek Goswami | The Sparks Foundation |</p></marquee>
</div>

</body>
</html>