<!DOCTYPE html>
<html>
<head>
    <title>Header Information</title>
</head>
<body>

<!-- 5.3 How to Retrieve all header information of a resource (file) -->

<button onclick="getHeaders()">Get Headers</button>
<pre id="result"></pre>

<script>
function getHeaders() {
    var xhttp = new XMLHttpRequest();

    xhttp.open("GET", "data.txt", true);
    xhttp.send();

    xhttp.onload = function() {
        document.getElementById("result").innerHTML =
            this.getAllResponseHeaders();
    };
}
</script>

</body>
</html>