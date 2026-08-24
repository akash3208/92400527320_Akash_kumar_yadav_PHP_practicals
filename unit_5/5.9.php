<!DOCTYPE html>
<html>
<head>
    <title>Search Suggestions</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<!-- 5.9 Create an input field for search suggestions. As the user types, use jQuery to make asynchronous requests -->

<h2>Search</h2>

<input type="text" id="search" placeholder="Search...">

<div id="suggestions"></div>

<script>
$("#search").keyup(function() {
    var value = $(this).val();

    if (value.length == 0) {
        $("#suggestions").html("");
        return;
    }

    $.ajax({
        url: "suggestions.php",
        type: "GET",
        data: {
            q: value
        },
        success: function(data) {
            $("#suggestions").html(data);
        }
    });
});
</script>

</body>
</html>

<?php
$q = $_GET["q"];

$items = ["Apple", "Banana", "Mango", "Orange", "Pineapple", "Grapes"];

foreach ($items as $item) {
    if (stripos($item, $q) !== false) {
        echo $item . "<br>";
    }
}
?>