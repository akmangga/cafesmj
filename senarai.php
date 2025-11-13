<?php session_start(); ?>

<!DOCTYPE html>
<html lang="ms">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation List</title>
<style>
body {
    font-family: 'Tahoma', sans-serif;
    background: #f9fafb;
    margin: 0;
    padding: 0;
}
header {
    background: #ffb300;
    color: white;
    text-align: center;
    padding: 15px;
    font-size: 1.3em;
    font-weight: 600;
}
.container {
    max-width: 900px;
    margin: 30px auto;
    background: white;
    border-radius: 12px;
    box-shadow: 0 6px 15px rgba(0,0,0,0.1);
    padding: 20px;
}
h2 {
    text-align: center;
    margin-bottom: 20px;
    color: #444;
}
table {
    width: 100%;
    border-collapse: collapse;
}
th, td {
    border-bottom: 1px solid #eee;
    padding: 12px;
    text-align: center;
}
th {
    background: #ffecb3;
    color: #333;
}
tr:hover {
    background: #fff8e1;
}
.empty {
    text-align: center;
    padding: 30px;
    color: #666;
    font-size: 1.1em;
}
.back-btn {
    display: inline-block;
    margin-top: 20px;
    padding: 10px 16px;
    background: #ffb300;
    color: white;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
}
.back-btn:hover {
    background: #ffa000;
}
</style>
</head>
<body>

<header>🍽 Reservation List</header>

<div class="container">
<h2>Booking List</h2>

<?php
$conn = new mysqli("localhost", "root", "", "cafe");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);
?>


<?php
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr>
        <th>Name</th>
        <th>Number of People</th>
        <th>Date</th>
        <th>Time</th>
    </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>" . htmlspecialchars($row['Name']) . "</td>
            <td>" . htmlspecialchars($row['bilangan']) . "</td>
            <td>" . htmlspecialchars($row['Date']) . "</td>
            <td>" . htmlspecialchars($row['Time']) . "</td>
        </tr>";
    }

    echo "</table>";
} else {
    echo "<div class='empty'>No reservations found.</div>";
}

$conn->close();
?>

<a href="senaraimenu.php" class="back-btn">← Back</a>
</div>

</body>
</html>