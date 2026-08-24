<!DOCTYPE html>
<html>
<head>
    <title>jQuery Selectors</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body>

<!-- 5.8 Select a few HTML elements (e.g., paragraphs, headings, buttons) and set their background color to red using jQuery. Experiment with different selectors and styles. -->

<h1>Heading</h1>

<p>First paragraph</p>
<p>Second paragraph</p>

<button>Button 1</button>
<button>Button 2</button>

<script>
$("h1").css("background-color", "red");
$("p").css("background-color", "red");
$("button").css("background-color", "red");
</script>

</body>
</html>