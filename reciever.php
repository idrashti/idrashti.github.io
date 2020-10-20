<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Reciever</title>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>
        <div id="navbar">
    <h1>Choose Reciever</h1> 
    </div>
        <form id="choose-reciever" action="amount.php" method="POST">
            <table id="reciever-table">
            <tr><td><input id="reciever" name="reciever" value="Drashti Patel" type="radio"></td><td>Drashti Patel</td></tr>
            <tr><td><input id="reciever" name="reciever" value="Srushti Patel" type="radio"></td><td>Srushti Patel</td></tr>
            <tr><td><input id="reciever" name="reciever" value="Shruti Patel" type="radio"></td><td>Shruti Patel</td></tr>
            <tr><td><input id="reciever" name="reciever" value="Krutik Patel" type="radio"></td><td>Krutik Patel</td></tr>
            <tr><td><input id="reciever" name="reciever" value="Digna Patel" type="radio"></td><td>Digna Patel</td></tr>
            <tr><td><input id="reciever" name="reciever" value="Nisarg Patel" type="radio"></td><td>Nisarg Patel</td></tr>
            <tr><td><input id="reciever" name="reciever" value="Stephy Rajpal" type="radio"></td><td>Stephy Rajpal</td></tr>
            <tr><td><input id="reciever" name="reciever" value="Yashvi Parmar" type="radio"></td><td>Yashvi Parmar</td></tr>
            <tr><td><input id="reciever" name="reciever" value="Anjali Mehta" type="radio"></td><td>Anjali Mehta</td></tr>
            <tr><td><input id="reciever" name="reciever" value="Anil Varma" type="radio"></td><td>Anil Varma</td></tr>
            </table>
            <input type="submit" id="submit-reciever">
        </form>
        <span id="home"><a href="index.html">Home</a></span>
    </body>
</html>
<?php
      $_SESSION["r-sender"]=$_POST["sender"];
?>