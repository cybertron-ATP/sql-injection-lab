<?php
include 'connection.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $query = "DELETE FROM users WHERE username = '$username'";
    if ($conn->query($query) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete User</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Delete User</h1>
    <form method="post">
        <input type="text" name="username" placeholder="Enter username">
        <input type="submit" value="Delete">
    </form>
</body>
</html>

