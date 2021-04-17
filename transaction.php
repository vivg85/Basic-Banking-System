<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Transaction History</title>
	<style type="text/css">
		 table{
            width: 800px;
            height: 100px;
            color: #2a4d69;
            font-size: 20px;
            border-color: #63ace5;
            
        }
        tr, th, td {
        	border: 1px solid #071a3d ;
            width: 800px;
        }
        th,td{
        	text-align: center;
            width: 800px;
        }
        th{
        	background-color: #4b86b4 ;
        	color: white;
            width: 800px;
        }
        body{
        	background-image: url("Transaction.png");
        	margin: 0;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .middle{
        	margin-left: auto;
        	margin-right: auto;
            width: 800px;
        }
        h1{
        	text-align: center;
        	font-size: 40px;
            color: white;
        }
        a{
            color: white;
            font-size:20px;
        }
        tr{
            font-size:25px;
            border: 2px solid #63ace5;    
            background-color: #e7eff6;
            
        }
        tr:hover{
            background-color: #63ace5;
            transition: all 0.4s;
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
    <a style="font-family:Teko; position:relative; left:380px" class="bye" href="table.php"><i class="fa fa-list"></i> User List</a>
    <a style="font-family:Teko; position:relative; left:400px" class="bye" href="money.php"><i class="fa fa-money"></i> Transfer Money</a>
    </div>

  </div>
	<?php include'connection.php' ?>

	<!-- <h1>Transaction History</h1> -->
    <br>
    <br>
    <br>
    <br>
	<br>
    <br>
	<table class="middle">
    <thead>
        <tr>
        <th style="font-family:Teko">Sr. No.</th>
            <th style="font-family:Teko">Sender</th>
            <th style="font-family:Teko">Receiver</th>
            <th style="font-family:Teko">Amount</th>
            <th style="font-family:Teko">Timestamp</th>
        </tr>
    </thead>
    <tbody>



		<?php $sql = "SELECT * FROM transaction1";
        $result = mysqli_query($conn, $sql);?>
    	<?php while( $row = mysqli_fetch_array($result)) : ?>
        
           
		<tr>
            <!--Each table column is echoed in to a td cell-->
            <td style="font-family:Doppio One; font-size: 20px; font-color: #2a4d69"><?php echo $row['transaction_id']; ?></td>
            <td style="font-family:Doppio One; font-size: 20px"><?php echo $row['sender']; ?></td>
            <td style="font-family:Doppio One; font-size: 20px"><?php echo $row['receiver']; ?></td>
            <td style="font-family:Doppio One; font-size: 20px"><?php echo $row['amount']; ?></td>
            <td style="font-family:Doppio One; font-size: 20px"><?php echo $row['datetime']; ?> </td>
        </tr>
        <?php endwhile ?>
    </tbody>
	</table>
    <div class="footer">
  <marquee behavior="scroll" direction="left">
  <p style="font-family:Teko">Made By | Vivek Goswami | The Sparks Foundation |</p></marquee>
</div>




</body>
</html>