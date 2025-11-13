<!DOCTYPE html>
<html lang="ms">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <!-- W3.CSS -->
  <link rel="stylesheet" href="css/w3.css">
  <!-- Ikon dari Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: 'Tahoma', sans-serif;
      background-color: #f3f6fa;
      margin: 0;
      <style>
  body {
    font-family: Tahoma, sans-serif;
    font-size: 11px;
    line-height: 1.5;
  }
</style>
    }
<style>
    /* Header utama */
    .admin-header {
      background-color: #0b5394;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 12px 25px;
      box-shadow: 0 3px 6px rgba(0,0,0,0.2);
      position: sticky;
      top: 0;
      z-index: 1000;
    }

    .admin-header h1 {
      font-size: 20px;
      margin: 0;
      letter-spacing: 1px;
    }

    
    .admin-nav a {
      color: white;
      text-decoration: none;
      margin: 0 10px;
      font-weight: 500;
      transition: 0.3s;
    }

    .admin-nav a:hover {
      color: #b6d7ff;
    }

    @media (max-width: 600px) {
      .admin-header {
        flex-direction: column;
        align-items: flex-start;
      }
      .admin-nav {
        margin-top: 8px;
      }
    }
  </style>
</head>

<body>

<!-- HEADER ADMIN -->
<header class="admin-header">
  <h1><i class="fa-solid fa-gears"></i>Admin Panel</h1>

  <nav class="admin-nav">
    <a href="dashboard.php"><i class="fa-solid fa-chart-line"></i> Dashboard</a>
    <a href="menu-manage.php"><i class="fa-solid fa-utensils"></i> Menu</a>
    <a href="orders.php"><i class="fa-solid fa-receipt"></i>Reserivation</a>
  </nav>

  <div class="admin-profile">
    <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png" alt="Admin">
    <a href="logout.php" class="w3-button w3-round w3-small w3-blue-gray">Log Keluar</a>
  </div>
</header>

</body>
</html>