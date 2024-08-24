<?php
include 'connection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "UPDATE users SET password = '$password' WHERE username = '$username'";
    if ($conn->query($query) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update User</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Update User</h1>
    <form method="post">
        <input type="text" name="username" placeholder="Enter username">
        <input type="text" name="password" placeholder="Enter new password">
        <input type="submit" value="Update">
    </form>
</body>
</html>

