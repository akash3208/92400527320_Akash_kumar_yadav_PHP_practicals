<!DOCTYPE html>
<html>
<head>
    <title>Callback Function</title>
</head>
<body>

<!-- 5.2 Create a XMLHttpRequest with a callback function, and retrieve data from a TXT file. -->

<button onclick="loadData()">Load Data</button>
<p id="result"></p>

<script>
function loadData() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            displayData(this.responseText);
        }
    };

    xhttp.open("GET", "data.txt", true);
    xhttp.send();
}

function displayData(data) {
    document.getElementById("result").innerHTML = data;
}
</script>

</body>
</html>