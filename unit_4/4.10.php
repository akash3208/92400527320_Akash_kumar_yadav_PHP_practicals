<?php
// 4.10 Write a PHP script to provide an edit profile page to the user where he/she can see the existing details and if he/she wants to change details then he/she can change them.

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (!isset($_SESSION["username"])) {
    die("Please login first");
}

$currentUser = $_SESSION["username"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $newUsername = $_POST["username"];
    $newEmail = $_POST["email"];

    $stmt = $conn->prepare("UPDATE users SET username = ?, email = ? WHERE username = ?");
    $stmt->bind_param("sss", $newUsername, $newEmail, $currentUser);

    if ($stmt->execute()) {
        $_SESSION["username"] = $newUsername;
        $currentUser = $newUsername;
        echo "Profile updated successfully";
    }

    $stmt->close();
}

$stmt = $conn->prepare("SELECT username, email FROM users WHERE username = ?");
$stmt->bind_param("s", $currentUser);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Profile</title>
</head>
<body>

<h2>Edit Profile</h2>

<form method="post">
    Username:
    <input type="text" name="username" value="<?php echo $user["username"]; ?>" required><br><br>

    Email:
    <input type="email" name="email" value="<?php echo $user["email"]; ?>" required><br><br>

    <input type="submit" value="Update Profile">
</form>

</body>
</html>