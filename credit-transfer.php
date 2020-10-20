<!DOCTYPE html>
<html lang="en">
    <head>
  <title>Tranfer</title>
</head>
<body>
<?php
        session_start();
?>
<?php
      $_SESSION["r-amount"]=$_POST["amount"];
      header('Location: transaction.php');
      exit;
?>
  </body>
</html>