<!DOCTYPE html>
<html lang="en">
<head>
  
  <!--  Meta  -->
  <meta charset="UTF-8" />
  <title>Amount</title>
  <link rel="stylesheet" href="index.css">
</head>
<body>
    <div id="navbar">
    <h1>Enter Amount</h1> 
    </div>
    <?php
        session_start();
    ?>
  <div id="amount-form">
      <form id="enter-amount" action="credit-transfer.php" method="POST">
        <table id="amount-table">
        <tr><td><input type="text" id="amount" name="amount"></td></tr>
        </table>
        <input type="submit" id="submit-amount">
      </form>
    <span id="home"><a href="index.html">Home</a></span>
    <?php
      $_SESSION["r-reciever"]=$_POST["reciever"];
    ?>
  </div>
</body>
</html>