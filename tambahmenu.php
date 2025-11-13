<?php
include('sambungdb.php');

if (isset($_POST['submit'])) {
  $namafood = $_POST['namafood'];
  $harga = $_POST['harga'];
  $info = $_POST['info'];
  $image = $_FILES['image']['name'];
  $target = "images/" . basename($image);

  // query tambah data
  $sql = "INSERT INTO food (namafood, harga, info, image, idpentadbir) 
          VALUES ('$namafood', '$harga', '$info', '$image', 1)";
  
  if (mysqli_query($db, $sql)) {
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
    echo "<script>alert('Menu has been successfully added!');window.location='senaraimenu.php';</script>";
  } else {
    echo "<script>alert('Error! Failed to add menu.');</script>";
  }
}
?>

<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Menu</title>
<style>
  :root{
    --primary:#FFB300;
    --light:#f5f9ff;
    --card:#fff;
    --text:#222;
    --border:#e0e7ff;
  }
  *{box-sizing:border-box;margin:0;padding:0;font-family:'Poppins',sans-serif}
  body{background:var(--light);min-height:100vh;color:var(--text);}
  header{
    background:var(--primary);color:white;padding:16px 24px;
    font-weight:600;font-size:1.2rem;
    display:flex;align-items:center;justify-content:space-between;
    box-shadow:0 4px 10px rgba(0,0,0,0.1);
  }
  header button{
    background:white;color:var(--primary);border:none;
    padding:8px 16px;border-radius:6px;font-weight:600;
    cursor:pointer;transition:.25s;
  }
  header button:hover{background:#e6efff;}

  main{
    max-width:700px;margin:40px auto;background:var(--card);
    border-radius:10px;padding:24px;box-shadow:0 6px 18px rgba(0,0,0,0.08);
  }
  h2{margin-bottom:18px;font-size:1.4rem;border-bottom:2px solid var(--primary);padding-bottom:6px;}
  label{display:block;margin:12px 0 4px;font-weight:600;}
  input,textarea{
    width:100%;padding:10px;border:1px solid var(--border);
    border-radius:6px;font-size:1rem;
  }
  textarea{resize:none;height:100px;}
  button[type=submit]{
    margin-top:16px;background:var(--primary);color:white;
    border:none;padding:10px 16px;border-radius:6px;
    font-size:1rem;font-weight:600;cursor:pointer;
    transition:background .2s;
  }
  button[type=submit]:hover{background:#005fa3;}
</style>
</head>
<body>

<header>
  <div>🍽 Admin Panel</div>
  <button onclick="window.location.href='senaraimenu.php'">← Back</button>
</header>

<main>
  <h2>Add Menu</h2>
  <form method="POST" enctype="multipart/form-data">
    <label>Name</label>
    <input type="text" name="namafood" required>

    <label>Price (RM)</label>
    <input type="text" name="harga" required>

    <label>Info</label>
    <textarea name="info" required></textarea>

    <label>Picture</label>
    <input type="file" name="image" accept="image/*" required>

    <button type="submit" name="submit">Add</button>
  </form>
</main>

</body>
</html>