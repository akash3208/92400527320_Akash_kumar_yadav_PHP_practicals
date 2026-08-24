<!DOCTYPE html>
<html>
<head>
    <title>Scroll to Top</title>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        body {
            height: 1500px;
        }

        #topButton {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<!-- 5.7 Design a button on your web page. When the user clicks the button, use jQuery to smoothly scroll to the top of the page. Implement this feature to enhance user experience. -->

<h1>My Web Page</h1>

<p>Scroll down the page and click the button.</p>

<button id="topButton">Go to Top</button>

<script>
$("#topButton").click(function() {
    $("html, body").animate({
        scrollTop: 0
    }, 1000);
});
</script>

</body>
</html>