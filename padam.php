<?php
include('sambungdb.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // semak kalau id wujud
    $query = "DELETE FROM food WHERE idfood = '$id'";
    $result = mysqli_query($db, $query);

    if ($result) {
        echo "<script>alert('Menu successfully deleted!'); window.location='senaraimenu.php';</script>";
    } else {
        echo "<script>alert('Failed to delete menu!'); window.location='senaraimenu.php';</script>";
    }
} else {
    echo "<script>alert('Invalid ID!'); window.location='senaraimenu.php';</script>";
}
?>