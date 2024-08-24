<?php
include 'connection.php';

if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "User: " . $row["username"]. " - Password: " . $row["password"]. "<br>";
        }
    } else {
        echo "0 results";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Select User</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Select User</h1>
    <form method="post">
        <input type="text" name="username" placeholder="Enter username">
        <input type="submit" value="Submit">
    </form>
</body>
</html>

