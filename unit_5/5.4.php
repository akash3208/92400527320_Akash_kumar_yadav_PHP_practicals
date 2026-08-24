<!DOCTYPE html>
<html>
<head>
    <title>Live Search</title>
</head>
<body>

<!-- 5.4 How a web page can communicate with a web server while a user type characters in an input field. -->

<h2>Search</h2>

<input type="text" id="search" onkeyup="searchData()" placeholder="Type something">

<p id="result"></p>

<script>
function searchData() {
    var value = document.getElementById("search").value;

    if (value.length == 0) {
        document.getElementById("result").innerHTML = "";
        return;
    }

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("result").innerHTML = this.responseText;
        }
    };

    xhttp.open("GET", "search.php?q=" + encodeURIComponent(value), true);
    xhttp.send();
}
</script>

</body>
</html>