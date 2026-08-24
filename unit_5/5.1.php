<!DOCTYPE html>
<html>
<head>
    <title>XMLHttpRequest Example</title>
</head>
<body>

<!-- 5.1 Create a simple XMLHttpRequest, and retrieve data from a TXT file. -->

<button onclick="loadData()">Load Data</button>
<p id="result"></p>

<script>
function loadData() {
    var xhttp = new XMLHttpRequest();

    xhttp.open("GET", "data.txt", true);
    xhttp.send();

    xhttp.onload = function() {
        document.getElementById("result").innerHTML = this.responseText;
    };
}
</script>

</body>
</html>