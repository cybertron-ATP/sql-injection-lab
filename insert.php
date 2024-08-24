<?php
include 'connection.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Insert User</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Insert User</h1>
    <form method="post">
        <input type="text" name="username" placeholder="Enter username">
        <input type="text" name="password" placeholder="Enter password">
        <input type="submit" value="Insert">
    </form>
</body>
</html>

