<?php 
//sambungan ke pangkalan data
include 'sambungdb.php';
session_start();
?>

<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


  <style>
    body {
      font-family: Tahoma, sans-serif;
      margin: 0;
      background: linear-gradient(to bottom right, ##FFB300, #fff);
      color: #FFB300;
      overflow-x: hidden;
    }

    .main-box {
      width: 80%;
      margin: 20px auto;
      background-color: #ffb300;
      color: #FFB300;
      min-height: 100px;
      font-weight: 100px;
      padding: 40px 20px;
      border-radius: 10px;
      text-align: center;
    }

    .welcome-text {
      font-size: 36px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .nav-btn {
      color: #FFB300;
      border: none;
      padding: 10px 20px;
      margin: 5px;
      font-size: 16px;
      cursor: pointer;
      border-radius: 53px;
      transition: background-color 0.3s ease;
    }

  .nav-btn:hover {
      background-color: #FFB300;
    }


  </style>
</head>

<style>
  header {
    position: fixed;
    top: 0;
    right:0 ;
    background-color: #FFB300;
    padding: 10px ;
    z-index: 1000px; /* ensures it stays on top */
  }

  .nav-btn {
     background-color: #FFB300;
    color: white;
    border: none;
    padding: 10px 16px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
  }

  .nav-btn:hover {
    background-color: #FFB300;
  }
</style>

<header>
  <a href="logmasukadmin.php" target="_blank">
    <button class="nav-btn">Admin Login</button>
  </a>
</header>




<style>
    body {
      font-family: Tahoma, sans-serif;
      margin: 0;
      background: linear-gradient(to bottom right, #FCE9BC, #fff);
      text-align: center;
    }


    .welcome-box {
      background-color: #FFB300;
      color: #fff;
      font-size: 32px;
      font-weight: bold;
      padding: 30px;
      margin: 40px auto;
      width: 80%;
      border-radius: 12px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      cursor: pointer;
    }

    .welcome-box:hover {
      transform: scale(1.1);
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    /* Optional: Make it responsive */
    @media (max-width: 600000px) {
      .welcome-box {
        font-size: 24px;
        padding: 20px;
      }
    }
  </style>


</head>
<body>

  <div class="welcome-box">
    Welcome To Cafe SMJ SMM ABC
  </div>

</body>




    
    <a href="lamanutama.php" target="_blank"><button class="nav-btn">ENTER</button></a>


   
    <section class="hero">
      <img src=img/interior1.jpeg ; class="active" alt="" style="width:24%; margin-top:10px; border-radius:50px;">
    </section>

    <footer style="margin-top: 13px;">
      <a href="about.html" target="_blank"><button class="nav-btn">About Us</button></a>
    </footer>
  </div>

</body>
</html>
