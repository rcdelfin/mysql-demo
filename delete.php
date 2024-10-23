<?php
include_once "connection.php";

$id = $_GET['id'];
$sql = "DELETE FROM users WHERE id = $id";
mysqli_query($connection, $sql);
mysqli_close($connection);

echo "Record deleted successfully";
echo "<br/><a href='index.php'>Back to Index</a>";
