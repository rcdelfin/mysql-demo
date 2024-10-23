<?php
include_once "connection.php";

$id = isset($_POST['id']) ? $_POST['id'] : null;
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

if ($id) {
    $sql = "UPDATE users SET first_name='$first_name', last_name='$last_name', email='$email' WHERE id=$id";
} else {
    $sql = "INSERT INTO users (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
}

if (mysqli_query($connection, $sql)) {
    echo $id ? "Record updated successfully" : "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

// back to index.php button
echo "<br/><a href='index.php'>Back to Index</a>";

mysqli_close($connection);
