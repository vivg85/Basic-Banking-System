<?php
	
		$conn = mysqli_connect("localhost", "root", "", "test");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User List</title>
    <style type="text/css">
        table, th,tr,td{
            border: 2px solid #4b86b4;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
            border-collapse: collapse;
            
            
        }
        table{
            width: 900px;
            height: 500px;
            color: #2a4d69;
            font-size: 30px;
            border-color: #4b86b4;
        }
        h1{
            text-align: center;
            color: white;
            font-size: 40px;
            margin-top:10px;

        }
        body{
            background-image: url("Userlist.png");
            background-repeat: no-repeat;
            background-size: cover;
            margin: 0;
        }
        th, td{
            text-align: center;
        
        }
        th{
            background-color: #4b86b4 ;
            color: white;
            border: 2px solid #adcbe3;
        }
        a{
            font-size:20px;
        }
        tr{
            font-size:25px;
            border: 2px solid black;    
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
  <!-- <a style="font-family:Teko" class="bye" href="table.php"><i class="fa fa-list"></i> User List</a> -->
  <a style="font-family:Teko; position:relative; left:300px" class="bye" href="transaction.php"><i class="fa fa-history"></i> Transaction History</a>
  <a style="font-family:Teko; position:relative; left:310px" class="bye" href="money.php"><i class="fa fa-money""></i> Transfer Money</a>
  </div>
    
    <!-- <h1 style="font-family:Teko" >User List</h1> -->
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <table class="center">
    <thead>
        <tr>
            <th style="font-family:Teko">Id</th>
            <th style="font-family:Teko">Name</th>
            <th style="font-family:Teko">Email</th>
            <th style="font-family:Teko">Balance</th>
           
        </tr>
    </thead>
    <tbody>
        <!--Use a while loop to make a table row for every DB row-->
        <?php $sql = "SELECT id, name1, email, balance FROM user";
        $result = mysqli_query($conn, $sql);?>
        <?php while( $row = mysqli_fetch_array($result)) : ?>
        
        <tr>
            <!--Each table column is echoed in to a td cell-->
            <td style="font-family:Doppio One; font-size: 20px"><?php echo $row['id']; ?></td>
            <td style="font-family:Doppio One; font-size: 20px"><?php echo $row['name1']; ?></td>
            <td style="font-family:Doppio One; font-size: 20px"><?php echo $row['email']; ?></td>
            <td style="font-family:Doppio One; font-size: 20px"><?php echo $row['balance']; ?></td>
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