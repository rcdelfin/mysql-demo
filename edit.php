<?php
include "connection.php";

$id = $_GET['id'];
$sql = "SELECT * FROM users WHERE id = $id";
$result = mysqli_query($connection, $sql);
$row = mysqli_fetch_assoc($result);
?>

<form action="process.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="first_name" value="<?php echo $row['first_name']; ?>">
    <input type="text" name="last_name" value="<?php echo $row['last_name']; ?>">
    <input type="email" name="email" value="<?php echo $row['email']; ?>">
    <button type="submit">Update</button>
</form>