<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
</head>
<body>
<?php
    
    session_start();
    
    $sender=$_SESSION["r-sender"];
    $reciever=$_SESSION["r-reciever"];
    $amount=$_SESSION["r-amount"]; 
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname="bankdb";
    
    $conn2 = mysqli_connect($servername,$username,$password,$dbname);
    if($conn2->connect_error)
    {
        die("Connection Failed!".$conn2->connect_error);
    }
    else
    {
        $sql2="SELECT balance FROM customers where customerName='$sender'";
        $result2 = $conn2->query($sql2);   
        $amount1=$result2->fetch_assoc()["balance"];
        
        if($amount1>$amount){ 
            
        $sql1="INSERT INTO transfers (`sender`,`reciever`,`amount`) VALUES ('$sender','$reciever','$amount')";
        $result1=$conn2->query($sql1);
            
        $amount2=$amount1-$amount;
        $sql3="UPDATE `customers` SET `balance`='$amount2' WHERE customerName='$sender'";
        $result4=$conn2->query($sql3);
          
        $sql4="SELECT balance FROM customers where customerName='$reciever'";
        $result3 = $conn2->query($sql4);   
        $amount3=$result3->fetch_assoc()["balance"];
        $amount4=$amount3+$amount;
        $sql5="UPDATE `customers` SET `balance`='$amount4' WHERE customerName='$reciever'";
        
        if($conn2->query($sql5)===TRUE){
            $message1="Transaction Successful!";
            echo"<script type='text/javascript'>alert('$message1');
                </script>";
             include 'index.html';
        }
        }
        else{
            $message="Insufficient Balance";
            echo"<script type='text/javascript'>alert('$message');
                </script>";
             include 'index.html';
        }
        }
        session_destroy();
 ?>
</body>
</html>


