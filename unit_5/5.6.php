<!DOCTYPE html>
<html>
<head>
    <title>jQuery Check</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<!-- 5.6 Create a simple HTML page that includes the jQuery library. Write a script to check if jQuery is successfully loaded. Display a message indicating whether jQuery is available or not. -->

<h2 id="message"></h2>

<script>
$(document).ready(function() {
    if (typeof jQuery != "undefined") {
        $("#message").text("jQuery is successfully loaded.");
    } else {
        document.getElementById("message").innerHTML = "jQuery is not available.";
    }
});
</script>

</body>
</html>