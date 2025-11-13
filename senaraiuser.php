<?php
include('sambungdb.php');
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: senarai.php");
  exit();
}
?>

<!DOCTYPE html>
<html> lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Senarai Tempahan Saya</title>
<style>
  :root {
    --primary: #0078d7;
    --light: #f5f9ff;
    --card: #fff;
    --border: #e0e7ff;
    --text: #222;
  }
  body {
    background: var(--light);
    font-family: 'Poppins', sans-serif;
    color: var(--text);
    margin: 0;
    padding: 0;
  }
  header {
    background: var(--primary);
    color: white;
    padding: 16px 24px;
    font-weight: 600;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  header button {
    background: white;
    color: var(--primary);
    border: none;
    padding: 8px 16px;
    border-radius: 6px;
    cursor: pointer;
    font-weight: 600;
  }
  main {
    max-width: 900px;
    margin: 30px auto;
    background: var(--card);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 6px 18px rgba(0,0,0,0.08);
  }
  h2 {
    text-align: center;
    margin-bottom: 20px;
  }
  table {
    width: 100%;
    border-collapse: collapse;
  }
  th, td {
    text-align: left;
    padding: 10px;
    border-bottom: 1px solid var(--border);
  }
  thead {
    background: var(--primary);
    color: white;
  }
  tr:hover {
    background: #eef6ff;
  }
  .btn-cancel {
    background: #e53935;
    color: white;
    border: none;
    padding: 6px 12px;
    border-radius: 4px;
    cursor: pointer;
  }
  .btn-cancel:hover {
    opacity: 0.8;
  }
  .empty {
    text-align: center;
    color: #777;
    padding: 20px;
  }
</style>
</head>
<body>

<header>
  <div>🍽 Tempahan Saya</div>
  <button onclick="window.location.href='senaraimenu.php'">← Kembali</button>
  <button onclick="window.location.href='logout.php'">Log Keluar</button>
</header>

<main>
  <h2>Senarai Tempahan Anda</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nama Makanan</th>
        <th>Jumlah</th>
        <th>Tarikh Tempah</th>
        <th>Status</th>
        <th>Tindakan</th>
      </tr>
    </thead>
    <tbody>
     
    
       }
     }
        }
      } else {
        echo "<tr><td colspan='6' class='empty'>Tiada tempahan ditemui</td></tr>";
      }
      ?>
    </tbody>
  </table>
</main>
</body>
</html>