<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>All Customers</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
    <div id="navbar">
    <h1>Customer Details</h1> 
    </div>
        <?php
            
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname="bankdb";
        
        $conn = new mysqli($servername,$username,$password,$dbname);
        if($conn->connect_error)
        {
            die("Connection Failed!".$conn->connect_error);
        }
        else{
            
            $sql="SELECT *FROM customers";
            $result = $conn->query($sql);
            echo '<div id="details"><table id="customers">';
            echo "<tr><th>ID</th><th>Name</th><th>EmailID</th><th>Account Number</th><th>Balance</th></tr>";
            
            while ($row = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td>".$row['customerID']."</td>";
              echo "<td>".$row['customerName']."</td>";
              echo "<td>".$row['emailID']."</td>";
              echo "<td>".$row['accountNumber']."</td>";
              echo "<td>".$row['balance']."</td>";
              echo "</tr>";
            }
            
            echo "</table></div>";
            $conn->close();
        }
        ?>
        <span id="home"><a href="index.html">Home</a></span>
    </body>
</html>
