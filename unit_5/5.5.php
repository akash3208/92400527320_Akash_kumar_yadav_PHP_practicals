<!DOCTYPE html>
<html>
<head>
    <title>AJAX Database</title>
</head>
<body>

<!-- 5.5 How a web page can fetch information from a database with AJAX. -->

<button onclick="loadUsers()">Load Users</button>

<div id="result"></div>

<script>
function loadUsers() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "users.php", true);
    xhttp.send();
}
</script>

</body>
</html>

<?php
$conn = new mysqli("localhost", "root", "", "testdb");

if ($conn->connect_error) {
    die("Connection failed");
}

$sql = "SELECT id, username, email FROM users";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    echo "ID: " . $row["id"] . "<br>";
    echo "Username: " . $row["username"] . "<br>";
    echo "Email: " . $row["email"] . "<br><br>";
}

$conn->close();
?>