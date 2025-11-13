<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <style>
    body {
      font-family: Tahoma, sans-serif;
      margin: 0;
      background: linear-gradient(to bottom right, #fff8e1, #FFF8E1);
      color: #FFFBF1;
      overflow-x: hidden;
    }
  </style>

  <link rel="stylesheet" href="css/w3.css">
</head>
<body>
  <br><br>
  <div class="w3-center w3-ci=ontainer" style="width:70%; height: 70%; margin:70px auto;min-height: 30vh; background-color:#FFB300;">
    <h3>Admin Login</h3>
 

    <form action="proseslogmasuk.php?q=2" method="post">
      <input class="w3-center" type="text" name="username" placeholder="Userame">
      <input class="w3-center" type="password" name="pwd" placeholder="Password">
      <br><br>

      <button class="w3-button w3-white" name="logmasuk">Login</button>
      <hr>
      <h6><a href="index.php" type="submin" name="singup">Go Back</a></h6>
    </form>
  </div>
</body>
</html>