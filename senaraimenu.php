<?php
include 'sambungdb.php';
session_start();
?>


<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Panel Admin - Senarai Menu</title>
<style>
  :root{
    --primary:#FFB300;
    --light:#f5f9ff;
    --card:#fff;
    --text:#222;
    --border:#e0e7ff;
  }
  *{box-sizing:border-box;margin:0;padding:0;font-family:'Poppins',sans-serif}
  body{
    background:var(--light);
    min-height:100vh;
    color:var(--text);
  }

  header{
    background:var(--primary);
    color:white;
    padding:16px 24px;
    font-weight:600;
    font-size:1.2rem;
    display:flex;
    align-items:center;
    justify-content:space-between;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
  }
  header button{
    background:white;
    color:var(--primary);
    border:none;
    padding:8px 16px;
    border-radius:6px;
    font-weight:600;
    cursor:pointer;
    transition:.25s;
  }
  header button:hover{background:#e6efff;}

  main{
    max-width:1000px;
    margin:30px auto;
    background:var(--card);
    border-radius:10px;
    padding:20px 24px;
    box-shadow:0 6px 18px rgba(0,0,0,0.08);
  }

  h2{
    margin-bottom:18px;
    font-size:1.4rem;
    border-bottom:2px solid var(--primary);
    padding-bottom:6px;
  }

  table{
    width:100%;
    border-collapse:collapse;
  }
  thead{
    background:var(--primary);
    color:white;
  }
  th,td{
    text-align:left;
    padding:10px 12px;
    border-bottom:1px solid var(--border);
    vertical-align:middle;
  }
  tr:hover{background:#f0f7ff;}

  .action-btn{
    background:var(--primary);
    border:none;
    color:white;
    padding:6px 12px;
    border-radius:4px;
    cursor:pointer;
    font-size:0.9rem;
  }
  .action-btn.delete{background:#e53935;}
  .action-btn:hover{opacity:0.85;}

  .food-img{
    width:70px;
    height:70px;
    border-radius:8px;
    object-fit:cover;
    border:1px solid #ccc;
  }

  .empty{
    text-align:center;
    padding:20px;
    color:#666;
  }

  footer{
    text-align:center;
    padding:20px;
    color:#888;
    font-size:0.85rem;
  }
</style>
</head>
<body>

<!-- HEADER ADMIN -->
<header class="admin-header">
  <h1><i class="fa-solid fa-gears"></i> Admin Panel</h1>

  <nav class="admin-nav">
    <a href="senarai.php"><button class="w3-button w3-blue">Reservation List</button></a>
   <a href="tambahmenu.php"><button class="w3-button w3-blue">+ Add Menu</button></a>
  <a href="logout.php"><button class="w3-button w3-small w3-blue-gray">Log Out</a>
</header>


<main>
  <h2>List of Foods</h2>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Picture</th>
        <th>Name</th>
        <th>Price (RM)</th>
        <th>Info</th>
      </tr>
    </thead>
    <tbody>
      <?php
      
      // Contoh bila dah sambung DB:
      $sql = "SELECT * FROM food";
      $result = mysqli_query($db, $sql);
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>".$row['idfood']."</td>";
          echo "<td><img src='images/".$row['image']."' class='food-img' alt=''></td>";
          echo "<td>".$row['namafood']."</td>";
          echo "<td>".$row['harga']."</td>";
          echo "<td>".$row['info']."</td>";
        echo "<td>
  <a href='kemaskini.php?id=" . $row['idfood'] . "'><button class='action-btn'>Edit</button></a>
  <a href='padam.php?id=" . $row['idfood'] . "' onclick=\"return confirm('Delete the menu?')\">
     <button class='action-btn delete'>Delete</button>
  </a>
</td>";
          echo "</tr>";
        }
      } else {
        echo "<tr><td colspan='6' class='empty'>No food record found.</td></tr>";
      }
      ?>
    </tbody>
  </table>
</main>

<footer>
  
</footer>

</body>
</html>